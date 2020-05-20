<div class="pt-20 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 relative z-20">  
    @if (33 != $post->post_parent)
    <h2 class="text-5xl font-display uppercase text-brand-darker leading-11"><?php the_sub_field('role'); ?></h2> 
    <a class="text-brand-dark underline" href="/people/<?php the_sub_field('role'); ?>">View all <?php the_sub_field('role'); ?>s</a>
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
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img class="opacity-50" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
</div>