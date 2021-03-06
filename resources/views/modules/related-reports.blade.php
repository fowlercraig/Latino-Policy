@php
  $postType = get_post_type();
  $terms = get_the_terms( $post->ID , 'issue', 'string');
  $term_ids = wp_list_pluck($terms,'term_id');
  $args = array(
    'post_type'      => $postType,
    'posts_per_page' => 4,
    'order'          => 'ASC',
    'tax_query'      => array(
      array(
        'taxonomy' => 'issue',
        'field'    => 'id',
        'terms'    => $term_ids,
        'operator' => 'IN' //Or 'AND' or 'NOT IN'
       )),
    'orderby' => 'rand',
    'post__not_in'=>array($post->ID)
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<section id="reports">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2 gap-10">
    <header class="col-span-1 lg:col-span-2 pb-8"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        From the Research Library
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

@endif
@php wp_reset_postdata() @endphp