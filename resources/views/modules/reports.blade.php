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

<section id="reports">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2">
    <header class="col-span-1 lg:col-span-2 pb-8"> 
      <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">
        @php the_field('reports_headline') @endphp
      </h2> 
      @if($link)
      <div class="h-1"></div>
      <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo $link['url'] @endphp">
        @php echo $link['title'] @endphp
      </a>
      @endif
    </header>

    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    <div class="-m-px">@include('research.report')</div>
    @php endwhile; @endphp

  </div>
</section>

@endif
@php wp_reset_postdata() @endphp