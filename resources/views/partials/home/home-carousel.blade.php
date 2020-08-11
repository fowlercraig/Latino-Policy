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

<section>
  <div class="glide">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">
        @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
          <li class="glide__slide">
            @include(
              'partials.components.featured-carousel-card',[
                'cat'     => get_the_terms(get_the_ID(), 'issue')[0]->name,
                'title'   => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'link'    => 'Learn More',
                'url'     => get_the_permalink(),
              ])
          </li>
        @php endwhile; @endphp
      </ul>
    </div>
  </div>
</section>

@endif
@php wp_reset_postdata() @endphp