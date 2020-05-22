<div class="relative -mt-64">
  <div class="pt-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
      <div>
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10  mb-0">Featured Projects</h2> 
        <a href="/research" class="text-base font-medium text-white-50 border-b-2 border-white-25 pb-1">View all All Reports</a> 
        <?php 
          global $post;
          $post_slug = $post->post_name;
        ?>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        @php 
          $args = array (
            'post_type'       => 'research',
            'posts_per_page'  => 4,
          );
          $temp = $wp_query;
          $wp_query = null;
          $wp_query = new WP_Query();
          $wp_query->query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
        @endphp 

        @include('partials.modules.report-item')

        @php 
          endwhile;
          $wp_query = null;
          $wp_query = $temp;
          wp_reset_postdata();
        @endphp 
      </div>
    </div>
  </div>
</div>