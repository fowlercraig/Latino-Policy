@php
  $link = get_field('reports_link');
  $ids = get_field('reports', false, false);
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

<section id="reports" class="-mt-48 relative">
  <div class="container relative z-10">
    <div class="space-y-2 lg:space-y-0 sm:grid lg:grid lg:grid-cols-2 gap-8 lg:gap-0">
      <header class="col-span-1 lg:col-span-2 pb-8"> 
        <h2 class="text-2xl sm:text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10 mb-0">
          @php the_field('reports_headline') @endphp
        </h2> 
        @if($link)
        <div class="h-1"></div>
        <a class="inline-block font-bold border-b-2 border-brand-light pb-1 text-brand-light transition ease duration-200 hover:border-brand-lighter" href="@php echo $link['url'] @endphp">
          @php echo $link['title'] @endphp
        </a>
        @endif
      </header>
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('research.report')
      @php endwhile; @endphp
    </div>
  </div>
  <div class="opacity-50 absolute top-0 left-0 pointer-events-none z-0 -mt-24">
    <img class="w-1/2" data-rellax-speed="5" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</section>

@endif
@php wp_reset_postdata() @endphp