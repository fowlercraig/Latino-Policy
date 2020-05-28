@if ( $post->post_parent == '33' || is_page(33) )

<div class="bg-white shadow py-5 relative z-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-x-10 text-sm">
    
    <a class="md:tracking-wider leading-6 font-medium font-brand text-gray-600 uppercase" href="/people">People</a>

    @php 
      $args = array (
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => 33,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
      );
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query->query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();
    @endphp 

    <a class="md:tracking-wider leading-6 font-medium font-brand text-gray-600 uppercase" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    @php 
      endwhile;
      $wp_query = null;
      $wp_query = $temp;  // Reset
      wp_reset_postdata();
    @endphp 
    
  </div>
</div>

@endif