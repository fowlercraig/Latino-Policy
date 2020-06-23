@php
  $role = get_field('role');
  $args = array(
    'post_type'      => 'person',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'title',
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
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">

      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('people.person-alt')
      @php endwhile; endif; @endphp

    </div>
  </section>
  
  @php wp_reset_postdata(); @endphp



