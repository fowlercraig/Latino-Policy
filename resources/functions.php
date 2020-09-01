<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


add_filter( 'excerpt_more', '__return_empty_string' ); 

// ************* Remove default Posts type since no blog *************
// Remove side menu
add_action( 'admin_menu', 'remove_default_post_type' );
function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}
// Remove +New post in top Admin Menu Bar
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}
// Remove Quick Draft Dashboard Widget
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );
function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}
// End remove post type

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="inline-block mr-1 rounded-full inline-block text-sm text-white bg-brand-darker font-bold py-4 px-6 items-center relative group 
      hover:bg-brand-dark transition ease duration-300 hover:shadow-xl"';
}


add_filter('sage/display_sidebar', function ($display) {
    static $display;

    isset($display) || $display = in_array(true, [
      // The sidebar will be displayed if any of the following return true
      is_single(),
      is_404(),
      is_page(696),
      is_archive(),
      is_page_template('views/template-custom.blade.php')
    ]);

    return $display;
});

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
        if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
            return true;   // we're at the page or at a sub page
        else 
    return false;  // we're elsewhere
};



add_filter( 'get_the_archive_title', function ($title) {    
    if ( is_category() ) {    
            $title = single_cat_title( '', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title( '', false );
        }
    return $title;    
});

function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
    $return = array();

    if (class_exists('WPSEO_Primary_Term')){
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)){
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories){
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)){
            $return['primary_category'] = $categories_list[0];  //get the first category
        }
        if ($return_all_categories){
            $return['all_categories'] = array();

            if (!empty($categories_list)){
                foreach($categories_list as &$category){
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}

add_filter('alm_filters_pressfilters_people', function(){ 

    // Define empty array
    $values = []; 

    // Get all categories
    $doctors = get_posts(array(
        'post_type'         => 'person',
        'posts_per_page'    => -1,
        'order'             => 'ASC',
        'tax_query'         => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'id',
                'terms'    => 'expert',
                'operator' => 'IN' //Or 'AND' or 'NOT IN'
            )
        )
    ));
      
    if( $doctors ){

         // Add All Item
        $values[] = array( 
            'label' => 'All',
            'value' => ''
        );   

        foreach( $doctors as $doctor ):
            global $post;
            $values[] = array(
                'label' => get_the_title( $doctor->ID ),
                'value' => $doctor->ID
            );
        endforeach;

    }        

    return $values; // Return values 

});

add_filter('alm_filters_researchfilters_people', function(){ 

    // Define empty array
    $values = []; 

    // Get all categories
    $doctors = get_posts(array(
        'post_type'         => 'person',
        'posts_per_page'    => -1,
        'order'             => 'ASC',
        'tax_query'         => array(
            array(
                'taxonomy' => 'role',
                'field'    => 'id',
                'terms'    => 'expert',
                'operator' => 'IN' //Or 'AND' or 'NOT IN'
            )
        )
    ));
      
    if( $doctors ){

         // Add All Item
        $values[] = array( 

            'label' => 'All',
            'value' => ''
        );   

        foreach( $doctors as $doctor ):
            global $post;
            $values[] = array(
                'label' => get_the_title( $doctor->ID ),
                'value' => $doctor->ID
            );
        endforeach;

    }        

    return $values; // Return values 

});


add_filter('alm_filters_researchfilters_resource', function(){ 

    // Define empty array
   $values = []; 
   
   // Get all categories
   $args = array(
    'post_type'      => 'research',
    'order' => 'ASC',
    'orderby' => 'name',
    'taxonomy' => 'resource',
    'hide_empty' => true,
   );  
   $terms = get_terms($args);
   
    // Loop terms
   if($terms){            
      foreach( $terms as $term ) { 
         $values[] = array(
            'label' => $term->name,
            'value' => $term->slug
         );
      }          
   }        
   return $values; // Return values 

});

function cookie_redirect() {
  $cookie_name = "thecookiemonster";
  global $cookie;
    if (!isset($_COOKIE[$cookie_name])) {
      setcookie( $cookie_name, 1, time()+1209600, SITECOOKIEPATH, COOKIE_DOMAIN, false, true);
      $cookie = false;
    } else {
      $cookie = true;
  }
}
add_action( 'init', __NAMESPACE__ . '\\cookie_redirect');

show_admin_bar(false);