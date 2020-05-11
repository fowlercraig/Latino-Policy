<div class="border-t border-gray-100 pt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">  
    @if (!is_tree(33))
    <h2 class="font-3xl uppercase tracking-wider font-semibold">Experts</h2> 
    @endif
    <div class="grid grid-cols-2 gap-8 lg:grid-cols-4 lg:gap-8">
      @php
        if (is_tree(33)) {
          // If we're on the people page
          global $post;
          $post_slug = $post->post_name;
          $args = array (
            'post_type'       => 'faculty',
            'posts_per_page'  => -1,
            'orderby'         => 'title',
            'order'           => 'ASC',
            'meta_key'        => 'role',
            'meta_value'      => $post_slug
          );
        } else {
          // If we're not!
          $args = array (
            'post_type'      => 'faculty',
            'posts_per_page' => -1,
            'order'          => 'ASC',
          );
        } 
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query($args);
        $counter = 0;
        while ($wp_query->have_posts()) : $wp_query->the_post();
      @endphp 

      <div data-aos="fade" data-aos-delay="<?php echo $counter ?>0">
        @include('partials.modules.experts-item')
      </div>

      @php 
        $counter++;
        endwhile;
        $wp_query = null;
        $wp_query = $temp;
        wp_reset_postdata();
      @endphp 
    </div>
  </div>
</div>