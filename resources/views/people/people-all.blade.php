@php

  $member_group_terms = get_terms( 'role' );
  foreach ( $member_group_terms as $member_group_term ):
    $member_group_query = new WP_Query( array(
      'post_type' => 'person',
      'posts_per_page' => 8,
      'orderby'        => 'rand',
      'meta_query' => array (
        array(
          'key' => '_thumbnail_id',
          'compare' => 'EXISTS'
        ),
      ),
      'tax_query' => array(
        array(
          'taxonomy' => 'role',
          'field'    => 'slug',
          'terms'     => array( $member_group_term->slug ),
          'operator' => 'IN'
        )
      )
    ));

  @endphp

  <div class="h-px bg-gray-100"></div>

  <section id="experts-@php echo $member_group_term->slug; @endphp">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">
      <header class="col-span-2 lg:col-span-4"> 
        <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-0">
          Featured @php echo $member_group_term->name; @endphp
        </h2> 
        <div class="h-1"></div>
        <a 
          class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" 
          href="@php echo $member_group_term->slug; @endphp">
          View all @php echo $member_group_term->name; @endphp
        </a>
      </header>

      @php if ( $member_group_query->have_posts() ) : while ( $member_group_query->have_posts() ) : $member_group_query->the_post(); @endphp
      @include('people.person')
      @php endwhile; endif; @endphp

    </div>
  </section>
  
  @php
    $member_group_query = null;
    wp_reset_postdata();
    endforeach;
  @endphp



