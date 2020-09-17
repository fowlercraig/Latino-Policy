@php
  $link = get_field('press_link');
  $ids = get_field('events', false, false);
  $args = array(
    'post_type'      => array('event'),
    'posts_per_page' => 3,
    'order'          => 'DESC',
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="news" class="relative overflow-hidden">
  <div class="container py-20 space-y-10 lg:space-y-0">
    <header class="col-span-1 lg:col-span-4 pb-8"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        Featured Events
      </h2> 
      @if(get_field('events_description'))
      <div class="h-1"></div>
      <p class="sm:text-xl lg:text-lg xl:text-xl">
        @php the_field('events_description') @endphp
      </p>
      @endif
    </header>

    @if ( $parent->post_count == 2)
    <div class="sm:grid lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
    @else
    <div class="sm:grid lg:grid lg:grid-cols-3 gap-8 lg:gap-12">
    @endif
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('newsroom.event-item',['count' => $parent->post_count])
      @php endwhile; @endphp
    </div>

  </div>
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img class="w-1/2 opacity-50" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</section>

@endif
@php wp_reset_postdata() @endphp