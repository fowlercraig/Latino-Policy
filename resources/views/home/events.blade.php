@if(!get_field('disable_events_section'))

@php
  $link = get_field('events_link');
  $ids = get_field('events', false, false);
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

<section id="events" class="bg-brand-dark pt-10 lg:pt-20 overflow-hidden relative">
  <div class="container space-y-4 sm:space-y-0 relative z-10">
    <header class="col-span-1 lg:col-span-2 ">
      <div class="grid grid-cols-4 items-center gap-4">
        <div class="col-span-4 sm:col-span-3">
          <h2 class="text-2xl sm:text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10 mb-0">
            @php the_field('events_headline') @endphp
          </h2> 
          @if($link)
          <div class="h-1"></div>
          <a class="inline-block font-bold border-b-2 border-brand-light pb-1 text-brand-light transition ease duration-200 hover:border-brand-lighter" href="@php echo $link['url'] @endphp">
            @php echo $link['title'] @endphp
          </a>
          @endif
        </div>
        <div class="controls col-span-4 sm:col-span-1">
          <div class="flex sm:justify-end space-x-2 sm:space-x-px">
            <div><button class="prev rounded-full h-10 w-10 sm:h-12 md:w-12 flex items-center justify-center text-white bg-brand hover:opacity-75 transition transition ease-in-out duration-150 hover:scale-110">
              <span class="sr-only">Previous Slide</span>
              <i data-feather="chevron-left"></i>
            </button></div>
            <div><button class="next rounded-full h-10 w-10 sm:h-12 md:w-12 flex items-center justify-center text-white bg-brand hover:opacity-75 transition transition ease-in-out duration-150 hover:scale-110">
              <span class="sr-only">Next Slide</span>
              <i data-feather="chevron-right"></i>
            </button></div>
          </div>
        </div>
      </div>
    </header>

    <div class="carousel carousel-events" data-carousel-options='{"autoAdvance":false,"pagination":false, "contained":false, "controls":{"container":".controls","previous":".prev","next":".next"} }'>
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <div class="mr-20">
        @include('modules.event-item')
      </div>
      @php endwhile; @endphp
    </div>

  </div>
  <div class="opacity-50 absolute top-0 left-0 pointer-events-none z-0 -mt-24">
    <img class="w-1/2" data-rellax-speed="5" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</section>

@endif
@php wp_reset_postdata() @endphp
@endif