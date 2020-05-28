<?php
  $title = get_field('staff_title');
  $link = get_field('staff_link');
  $ids = get_field('staff', false, false);
  $args = array(
    'post_type'       => 'faculty',
    'posts_per_page'  => 8,
    'order'           => 'RAND',
    'orderby'         => 'menu_order',
    'post__in'        => $ids,
    'post_status'     => 'any',
    'orderby'         => 'post__in',
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ) : 
?>

@include('partials.people.container')

<?php endif; wp_reset_postdata(); ?>