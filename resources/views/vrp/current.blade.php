@php
  $ids = get_field('current_litigation', false, false);
  $args = array(
    'post_type'      => 'research',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'post__in'       => $ids,
    'post_status'    => 'any',
    'orderby'        => 'post__in',
  );
  $parent = new WP_Query( $args );
  if($ids):
  if ( $parent->have_posts() ):
@endphp

<section id="pastlitigation">
  <header>
    <div>
      <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 xl:leading-13">
        Active Ligitation
      </h2> 
    </div>
    <div>
      @php the_field('description'); @endphp
    </div>
  </header>

  @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
  @include('vrp.litigation')
  @php endwhile; @endphp

</section>

@endif
@endif
@php wp_reset_postdata() @endphp