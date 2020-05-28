<?php
  global $post;
  $post_slug = $post->post_name;
  $args = array(
    'post_type'       => 'faculty',
    'posts_per_page'  => -1,
    'order'           => 'ASC',
    'orderby'         => 'menu_order',
    'tax_query'       => array(
      array (
        'taxonomy'    => 'role',
        'field'       => 'slug',
        'terms'       => $post_slug
      )
    )
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ) : 
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8">
  <div class="grid grid-cols-4 gap-12">
    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include('partials.modules.experts-item')
    @php endwhile; @endphp
  </div>
</div>

<?php endif; wp_reset_postdata(); ?>