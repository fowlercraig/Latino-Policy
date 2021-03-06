@php
  $link = get_field('events_link');
  $ids = get_field('features', false, false);
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

<section id="events" class="bg-brand-darker overflow-hidden relative z-0">
  <div class="container space-y-4 sm:space-y-0 relative z-10">
    <header class="col-span-1 lg:col-span-2 ">
      <div class="grid grid-cols-4 items-center gap-4">
        <div class="col-span-4 sm:col-span-3">
        </div>
      </div>
    </header>

    <div class="carousel carousel-events" data-carousel-options='{"autoAdvance":false,"pagination":false, "contained":false, "controls":{"container":".controls","previous":".prev","next":".next"} }'>
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <div class="mr-20">
        @include('modules.feature-item')
      </div>
      @php endwhile; @endphp
    </div>

    <div class="absolute inset-x-0 left-0 bottom-0 z-40">
      <div class="container">
        <div class="controls">
          <div class="flex">
            <button class="prev h-10 w-10 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-left"></i></button>
            <button class="next h-10 w-10 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-right"></i></button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endif
@php wp_reset_postdata() @endphp