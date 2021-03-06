@php
  $link = get_field('experts_link');
  $ids = get_field('experts', false, false);
  $args = array(
    'post_type'      => 'person',
    'posts_per_page' => 8,
    'order'          => 'ASC',
    'post__in'       => $ids,
    'post_status'    => 'any',
    'orderby'        => 'post__in',
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="experts">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">
    <header class="col-span-2 lg:col-span-4 grid grid-cols-2 gap-4 sm:gap-8 lg:gap-12">
      <div>
        <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13">
          @php the_field('experts_headline') @endphp
        </h2> 
        @if($link)
        <div class="h-1"></div>
        <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo $link['url'] @endphp">
          @php echo $link['title'] @endphp
        </a>
        @endif
      </div>
      <div>
        @php the_field('description'); @endphp
      </div>
    </header>

    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include('people.person')
    @php endwhile; @endphp

  </div>
</section>

@endif
@php wp_reset_postdata() @endphp