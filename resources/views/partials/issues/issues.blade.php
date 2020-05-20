<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 pt-10 relative z-20">

<?php

  $args = array (

    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
  $thumb_url = $thumb_url_array[0];
  //var_dump($thumb_url);
?>

@include('partials.page-block')

<?php
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>

</div>