<div class="pt-20 relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 relative z-20">  
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
      Related Experts
    </h2> 
    <div class="grid grid-cols-2 gap-8 lg:grid-cols-4 lg:gap-8">
      <?php
        $terms = get_the_terms( $post->ID, 'issue' );
        $term_ids = wp_list_pluck($terms,'term_id');

        $args = array (
          'post_type'       => 'faculty',
          'posts_per_page'  => -1,
          'order'           => 'ASC',
          'meta_key'        => 'role',
          'meta_value'      => 'expert',
          'post__not_in'    =>array($post->ID),
          'tax_query' => array(
            array (
              'taxonomy' => 'issue',
              'field' => 'term_id',
              'terms' => $term_ids,
              'operator'=> 'IN'
            )
          )
        );
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query($args);
        $counter = 0;
        while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>

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