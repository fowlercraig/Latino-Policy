@php
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => 630,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<div class="bg-brand relative z-20">
  <div class="container py-3 font-medium space-x-6">
    @php $member_group_terms = get_terms( 'role' ); @endphp
    @php while ( $parent->have_posts() ) : $parent->the_post() @endphp
    <a 
      class="py-1 text-white inline-block transition duration-300 ease hover:text-white-75" 
      title="Opens @php echo $member_group_term->name; @endphp page in same window" 
      href="@php the_permalink() @endphp">@php the_title() @endphp</a>
    @php endwhile @endphp
  </div>
</div>

@endif
@php wp_reset_postdata() @endphp