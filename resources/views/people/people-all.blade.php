@php

$args = array(
  'post_type'      => 'page',
  'posts_per_page' => -1,
  'post_parent'    => $post->ID,
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
);

$parent = new WP_Query( $args );
if ( $parent->have_posts() ) : @endphp
@php while ( $parent->have_posts() ) : $parent->the_post();  global $post; @endphp

  @php
    if ($post->post_name == 'staff'):
      $bgColor = 'white';
    elseif ($post->post_name == 'fellows'):
      $bgColor = 'red-100';
    elseif ($post->post_name == 'experts'):
      $bgColor = 'teal-100';
    else:
      $bgColor = 'purple-100';
    endif;
  @endphp

  <div class="h-px bg-gray-100"></div>
  
  <section id="section-@php echo $post->post_name; @endphp" class="panel" data-color="@php echo $bgColor @endphp">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">
      <header class="col-span-2 lg:col-span-4"> 
        <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13">
          Featured @php the_title(); @endphp
        </h2> 
        <div class="h-1"></div>
        <a 
          class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" 
          href="@php echo $member_group_term->slug; @endphp">
          View all @php echo $member_group_term->name; @endphp
        </a>
      </header>

      @php $posts = get_field('featured_people'); @endphp
      @if( $posts )
        @php foreach( $posts as $p ): @endphp
          @include('people.person-alt')
        @php endforeach; @endphp
      @endif
      
    </div>
  </section>

@php endwhile; @endphp
@php endif; wp_reset_postdata(); @endphp