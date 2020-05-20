<div class="pt-10 relative border-b border-gray-100 pb-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-20">  
    @if (33 != $post->post_parent)
    <div class="flex items-center pb-3 mb-10">
      <div class="w-1/3 flex space-x-3 items-center">
        <h2 class="text-5xl font-display uppercase text-brand-darker leading-11"><?php the_sub_field('role'); ?></h2> 
        <a 
          class="text-brand-darker hover:text-white bg-white hover:bg-brand-darker transition duration-200 ease shadow-lg rounded-full border-gray-100 h-10 px-4 flex items-center font-brand uppercase text-xs tracking-wider font-medium" 
          href="/people/<?php the_sub_field('role'); ?>">View all <?php the_sub_field('role'); ?>s</a>
      </div>
      <div class="w-2/3 text-gray-700 leading-6">
        @php the_sub_field('description'); @endphp
      </div>
    </div>
    @endif
    <div class="grid grid-cols-2 gap-8 lg:grid-cols-4 lg:gap-8">
      @php
        if (33 == $post->post_parent) {
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
          if(get_sub_field('role')) {
            $role = get_sub_field('role');
          } else {
            $role = '';
          }
          $args = array (
            'post_type'      => 'faculty',
            'posts_per_page' => 8,
            'order'          => 'ASC',
            'meta_key'        => 'role',
            'meta_value'      => $role
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