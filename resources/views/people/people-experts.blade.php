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

  <!-- Filter #1 -->
  <ul class="alm-filter-nav">
     <li><a href="#" data-target="filter-1" data-repeater="template_41" data-post-type="portfolio" data-button-label="More Work">Work</a></li>
     <li><a href="#" data-target="filter-1" data-repeater="template_41" data-post-type="post" data-button-label="More Articles">Articles</a></li>
  </ul>
   
  <!-- Filter #2 -->
  <ul class="alm-filter-nav">
     <li><a href="#" data-target="filter-2" data-custom-args="post_parent:1926" data-post-in="" data-button-label="Load More Examples">ALM Examples</a></li>
     <li><a href="#" data-target="filter-2" data-custom-args="" data-post-in="4716, 18940, 12202, 3112, 14506, 6558, 4137, 9713, 169781, 3263, 8946" data-button-label="Load More Add-ons">ALM Add-ons</a></li>
  </ul>

  <div class="h-px bg-gray-100"></div>
  
  <section id="experts-@php echo $member_group_term->name; @endphp">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">

      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('people.person-alt')
      @php endwhile; endif; @endphp

    </div>
  </section>
  
  @php wp_reset_postdata(); @endphp



