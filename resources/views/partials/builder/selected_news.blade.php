@if (is_front_page())
<div class="relative pt-10 lg:pt-20">
@else
<div class="relative">
@endif
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 relative z-10">
    <div>
      <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-0">News & Press</h2> 
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      @php 
        $ids = get_sub_field('news', false, false);
        $args = array (
          'post_type'       => 'press',
          'posts_per_page'  => -1,
          'order'           => 'ASC',
          'post__in'        => $ids,
          'post_status'     => 'any',
          'orderby'         => 'post__in',
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
  <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0 lg:-mt-20">
    <img 
      alt="Pattern"
      class="opacity-50 w-full" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
</div>