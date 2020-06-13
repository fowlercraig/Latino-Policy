@php
  $year = get_field('graduation_year');
  $role = get_field('role');
  $args = array(
    'post_type'       => 'person',
    'posts_per_page'  => -1,
    'order'           => 'ASC',
    'orderby'         => 'title',
    'meta_query'      => array(
        array(
            'key'     => 'graduation_year',
            'value'   => $year,
            'compare' => 'IN'
        )
    ),
    'tax_query'       => array(
      array(
        'taxonomy' => 'role',
        'field'    => 'id',
        'terms'    => $role,
        'operator' => 'IN' //Or 'AND' or 'NOT IN'
       )),
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

  <div class="h-px bg-gray-100"></div>

  <section id="experts-@php echo $member_group_term->name; @endphp">
    <div class="header mb-10">
      <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13">
        @php the_field('current_title') @endphp
      </h2> 
    </div>
    <div id="current" class="flex flex-wrap -m-6">
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('people.person')
      @php endwhile; endif; @endphp
    </div>
  </section>
  
  @php wp_reset_postdata(); @endphp