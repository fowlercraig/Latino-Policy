<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Run The Theme
|--------------------------------------------------------------------------
|
| Once we have the theme booted, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

require_once __DIR__ . '/bootstrap/app.php';


// Remove Posts
function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');

add_filter('alm_filters_press_filters_contributors', function(){ 

  $values = []; 

  $experts = get_posts(array(
    'post_type'      => 'people',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'tax_query'      => array(
      array(
        'taxonomy'   => 'role',
        'field'      => 'slug',
        'terms'      => 'experts',
      )
    )
  ));
  $values = [];
  // $values[] = array(
  //   'label' => 'All Experts',
  //   'value' => ''
  // );
  
  foreach($experts as $expert) { 
    $values[] = array(
      'label' => get_the_title( $expert->ID ),
      'value' => $expert->ID,
    );
  } 
   
  return $values; // Return values 
});

add_filter('alm_filters_research_library_contributors', function(){ 

  $values = []; 

  $experts = get_posts(array(
    'post_type'      => 'people',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'tax_query'      => array(
      array(
        'taxonomy'   => 'role',
        'field'      => 'slug',
        'terms'      => 'experts',
      )
    )
  ));
  $values = [];
  // $values[] = array(
  //   'label' => 'All Experts',
  //   'value' => ''
  // );
  
  foreach($experts as $expert) { 
    $values[] = array(
      'label' => get_the_title( $expert->ID ),
      'value' => $expert->ID,
    );
  } 
   
  return $values; // Return values 
});