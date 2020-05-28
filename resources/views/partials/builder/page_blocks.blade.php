<div id="page_blocks" class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 pt-10 relative z-20">

  <div class="space-y-6 lg:space-y-0 lg:space-x-6 lg:flex">
    <div class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0 flex-shrink-0">
      <?php the_sub_field('title'); ?>
    </div>
    <div class="text-gray-600 lg:w-1/2 lg:border-l lg:pl-6"><?php the_sub_field('description'); ?></div>
  </div>

  <?php

    $ids = get_sub_field('pages', false, false);
    
    $args = array (

      'post_type'       => 'page',
      'posts_per_page'  => -1,
      'post__in'        => $ids,
      'post_status'     => 'any',
      'orderby'         => 'post__in',

    );

    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query($args);
    while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

  @include('partials.page-block')

  <?php
    endwhile;
    $wp_query = null;
    $wp_query = $temp;  // Reset
    wp_reset_postdata();
  ?>

</div>