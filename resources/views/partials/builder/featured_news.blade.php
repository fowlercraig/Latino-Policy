<div class="pt-20">
  <div class="pt-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 relative z-10">
      <div>
        <h2 class="text-2xl text-blue-800 font-bold">News & Updates</h2> 
        <a class="text-base font-medium text-gray-500 border-b pb-1">View all {!! App::title() !!} News</a> 
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
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
    <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0">
      <img class="opacity-50 w-full" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>