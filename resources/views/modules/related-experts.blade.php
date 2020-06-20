@php
  $terms = get_the_terms( $post->ID , 'issue', 'string');
  if($terms):
  $term_ids = wp_list_pluck($terms,'term_id');
  $args = array(
    'post_type'      => 'person',
    'posts_per_page' => 4,
    'order'          => 'ASC',
    'tax_query'      => array(
      array(
        'taxonomy' => 'issue',
        'field'    => 'id',
        'terms'    => $term_ids,
        'operator' => 'IN' //Or 'AND' or 'NOT IN'
       )),
    'ignore_sticky_posts' => 1,
    'orderby' => 'rand',
    'post__not_in'=>array($post->ID)
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="experts">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">
    <header class="col-span-2 lg:col-span-4"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        Related Experts
      </h2> 
      <div class="h-1"></div>
      <a class="inline-block font-bold border-b-2 border-red-800 pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="/people/experts">
        More Experts
      </a>
    </header>

    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include('people.person')
    @php endwhile; @endphp

  </div>
</section>

@endif
@php wp_reset_postdata(); endif; @endphp