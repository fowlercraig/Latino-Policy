@php
  $link = get_field('press_link');
  $ids = get_field('press', false, false);
  $args = array(
    'post_type'      => array('research', 'press', 'event'),
    'posts_per_page' => 4,
    'order'          => 'ASC',
    'post_status'    => 'any',
    'orderby'        => 'post__in',
    'tax_query' => array(
        array (
            'taxonomy' => 'resource',
            'field' => 'slug',
            'terms' => 'court-filings-opinions',
        )
    ),
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="news">
  <div class="space-y-10 lg:space-y-0">
    <header class="col-span-1 lg:col-span-4 pb-8"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        Related News
      </h2> 
      @if($link)
      <div class="h-1"></div>
      <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo $link['url'] @endphp">
        @php echo $link['title'] @endphp
      </a>
      @endif
    </header>

    @if ( $parent->post_count == 2)
    <div class="sm:grid lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
    @else
    <div class="sm:grid lg:grid lg:grid-cols-4 gap-8 lg:gap-12">
    @endif
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('modules.news-item',['count' => $parent->post_count])
      @php endwhile; @endphp
    </div>

  </div>
</section>

@endif
@php wp_reset_postdata() @endphp