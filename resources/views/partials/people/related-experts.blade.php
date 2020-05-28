<?php
  $roles    = get_the_terms(get_the_ID(), 'role')[0]->name;
  $role     = $roles . 's';
  $title    = 'Other ' . $role;
  $link     = array(
    "title" => 'More ' . $role,
    "url"   => '/people/' . $roles,
  );
  $terms = get_the_terms( $post->ID, 'issue' );
  $term_ids = wp_list_pluck($terms,'term_id');
  $args = array(
    'post_type'       => 'faculty',
    'posts_per_page'  => 4,
    'order'           => 'RAND',
    'orderby'         => 'menu_order',
    'post__in'        => $ids,
    'post__not_in'    =>array($post->ID),
    'post_status'     => 'any',
    'orderby'         => 'post__in',
    'tax_query' => array(
      array (
        'taxonomy'    => 'issue',
        'field'       => 'term_id',
        'terms'       => $term_ids,
        'operator'    => 'IN'
      )
    )
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ) : 
?>

<div class="relative pt-20">
  <div class="relative z-10">
    @include('partials.people.container')
  </div>
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img alt="Pattern" class="opacity-50" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
</div>

<?php endif; wp_reset_postdata(); ?>