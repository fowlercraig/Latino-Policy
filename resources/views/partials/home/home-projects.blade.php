@php
  $link = get_field('press_link');
  $ids = get_field('press', false, false);
  $args = array(
    'post_type'      => array('research', 'press', 'event'),
    'posts_per_page' => 4,
    'order'          => 'ASC',
    'post_status'    => 'any',
    'tax_query'      => array(
        array(
            'taxonomy' => 'resource',
            'operator' => 'NOT IN',
            'terms'    => array('court-filings-opinions'),
        )
    )
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section class="relative">
  <div class="container max-w-none relative z-10"> 
    @include('partials.components.header-card',['title' => 'Featured Projects & Reports','textColor' => 'text-white'])
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8 lg:gap-6">
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include(
        'partials.components.report-card',[
          'cat'       => get_the_terms(get_the_ID(), 'issue')[0]->name,
          'title'     => get_the_title(),
          'linkTitle' => 'Learn More',
          'linkUrl'   => get_the_permalink(),
        ])
      @php endwhile; @endphp
    </div>
  </div>
  <div class="h-64 absolute top-0 inset-x-0 bg-brand-darker z-0"></div>
</section>

@endif
@php wp_reset_postdata() @endphp