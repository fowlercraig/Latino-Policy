<div class="border-t border-gray-100 pt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
    <div>
      <h2 class="text-2xl text-blue-800 font-bold">News & Updates</h2> 
      <a class="text-base font-medium text-gray-500 border-b pb-1">View all {!! App::title() !!} News</a> 
    </div>
    <div class="flex flex-wrap md:-mx-md space-y-5 lg:space-y-0">
      @php 
        $args = array (
          'posts_per_page' => 3,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
        );
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();
      @endphp 

      @include('partials.modules.article-item')

      @php 
        endwhile;
        $wp_query = null;
        $wp_query = $temp;
        wp_reset_postdata();
      @endphp 
    </div>
  </div>
</div>