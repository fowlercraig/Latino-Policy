@php
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
  while ( $parent->have_posts() ) : $parent->the_post();
@endphp

<div id="parent-<?php the_ID(); ?>" class="parent-page">
  <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
</div>

<?php endwhile; ?>

@endif
@php wp_reset_postdata() @endphp