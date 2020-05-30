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

<section id="news">
  <div class="space-y-2 lg:space-y-0 sm:grid lg:grid lg:grid-cols-4 gap-8 lg:gap-12">
    <header class="col-span-1 lg:col-span-4"> 
      <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">
        @php the_field('press_headline') @endphp
      </h2> 
      @if($link)
      <div class="h-1"></div>
      <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo $link['url'] @endphp">
        @php echo $link['title'] @endphp
      </a>
      @endif
    </header>

    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include('modules.news-item')
    @php endwhile; @endphp

  </div>
</section>

@endif
@php wp_reset_postdata() @endphp