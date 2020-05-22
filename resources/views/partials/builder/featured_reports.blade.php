<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
  <div>
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">Featured Reports</h2> 
    <a href="#" class="text-base text-brand font-bold border-b-2 border-brand pb-1">View all {!! App::title() !!} Reports</a> 
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
        'meta_query' => array(
          array(
            'key' => 'issue', // name of custom field
            'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
            'compare' => 'LIKE'
          )
        )
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