<div id="page_blocks" class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 pt-10 relative z-20">

  <div class="flex flex-wrap lg:-mx-6 space-y-6 items-center">

    <div class="w-full lg:w-1/2 lg:px-6 space-y-3 lg:space-y-6">
      @php $image = get_sub_field('image'); @endphp
      <div class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0"><?php the_sub_field('title'); ?></div>
      <div class="text-gray-600"><?php the_sub_field('description'); ?></div>

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
        <div class="text-gray-600">
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
    <div class="w-full lg:w-1/2 space-y-3 lg:px-6">
      <img alt="@php echo $image['alt']; @endphp" src="@php echo $image['sizes']['large']; @endphp">
    </div>
  </div>
</div>