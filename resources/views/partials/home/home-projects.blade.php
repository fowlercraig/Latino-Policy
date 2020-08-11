@php
  $link = get_field('press_link');
  $ids = get_field('press', false, false);
  $args = array(
    'post_type'      => array('research', 'press', 'event'),
    'posts_per_page' => 4,
    'order'          => 'ASC',
    'post__in'       => $ids,
    'post_status'    => 'any',
    'orderby'        => 'post__in',
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section>
  @include('partials.components.header-card',['title' => 'Featured Projects & Reports'])
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include(
      'partials.components.report-card',[
        'cat'   => get_the_terms(get_the_ID(), 'issue')[0]->name,
        'title' => get_the_title(),
        'link'  => 'Learn More',
        'url'   => get_the_permalink(),
      ])
    @php endwhile; @endphp
  </div>
</section>

@endif
@php wp_reset_postdata() @endphp