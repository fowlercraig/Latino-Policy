<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
  <div>
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">Featured Projects</h2> 
    <a href="#" class="text-base text-brand font-bold border-b-2 border-brand pb-1">View all {!! App::title() !!} Projects</a> 
  </div>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    @php 
      $ids = get_sub_field('reports', false, false);
      $args = array (
        'post_type'       => 'research',
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

    @include('partials.modules.report-item')

    @php 
      endwhile;
      $wp_query = null;
      $wp_query = $temp;
      wp_reset_postdata();
    @endphp 
  </div>
</div>