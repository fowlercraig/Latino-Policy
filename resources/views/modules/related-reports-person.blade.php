@php
  $args = array(
    'post_type' => array('research', 'event', 'press'),
    'meta_query' => array(
      array(
        'key' => 'people', // name of custom field
        'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
        'compare' => 'LIKE'
      )
    )
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="reports">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2">
    <header class="col-span-1 lg:col-span-2 pb-8"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-extrabold tracking-tight text-brand-darker mb-0">
        Reports from @php the_title() @endphp
      </h2> 
      <div class="h-1"></div>
      <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo $link['url'] @endphp">
        More from the Research Library
      </a>
    </header>

    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    <div class="-m-px">@include('research.report')</div>
    @php endwhile; @endphp

  </div>
</section>

<div class="h-px bg-gray-100"></div>

@endif
@php wp_reset_postdata() @endphp