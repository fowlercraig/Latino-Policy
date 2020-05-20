<div id="page_blocks" class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 pt-10 relative z-20">

  <div class="flex flex-wrap lg:-mx-6 space-y-6">

    <div class="w-full lg:w-1/3 lg:px-6 space-y-3 lg:space-y-6">
      <div class="text-brand-darker font-bold uppercase text-xl tracking-wider font-brand"><?php the_sub_field('title'); ?></div>
      <div class="text-gray-500"><?php the_sub_field('description'); ?></div>
    </div>

    <div class="w-full lg:w-2/3 space-y-3 lg:px-6">

      <?php

        $ids = get_sub_field('reports', false, false);
        
        $args = array (

          'post_type'       => array('page', 'research', 'press'),
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

      <a
        title="Downloads <?php the_title(); ?> to your computer"
        href="#"
        class="bg-gray-50 hover:bg-gray-100 transition duration-150 eases flex px-6 py-5 rounded justify-between items-center space-x-6 relative overflow-hidden">
        <div class="h-16 w-16 bg-white flex items-center justify-center sm:flex-shrink-0 rounded shadow">
          <i class="text-brand-darker mx-auto block" data-feather="download"></i>
        </div>
        <div class="text-gray-500">
          <div class="font-bold text-brand-darker -mt-1"><?php the_title(); ?></div>
          <div class="text-sm"><?php the_excerpt(); ?></div>
        </div>
      </a>

      <?php
        endwhile;
        $wp_query = null;
        $wp_query = $temp;  // Reset
        wp_reset_postdata();
      ?>

    </div>
  </div>
</div>