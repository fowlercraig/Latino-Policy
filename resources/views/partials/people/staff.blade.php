<?php
  $link = get_field('staff_link');;
  $ids = get_field('staff', false, false);
  $args = array(
    'post_type'       => 'faculty',
    'posts_per_page'  => 8,
    'order'           => 'RAND',
    'orderby'         => 'menu_order',
    'post__in'        => $ids,
    'post_status'     => 'any',
    'orderby'         => 'post__in',
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ) : 
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-8">
  <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-8">
    @php the_field('staff_title') @endphp
  </h2> 
  <div class="grid grid-cols-4 gap-8">
    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    @include('partials.modules.experts-item')
    @php endwhile; @endphp
  </div>
  <a 
    class="rounded-full inline-block text-base text-white bg-brand-darker font-bold py-6 px-8 pr-6 items-center relative group 
    hover:bg-brand-dark transition ease duration-300 hover:shadow-xl" 
    href="@php echo $parent_url @endphp" 
    title="Opens @php echo $parent_title @endphp in same window">
    <span class="flex items-center space-x-2">
      <span>@php echo $link['title'] @endphp</span>
      <i class="text-white group-hover:translate-x-1 transform transition ease duration-200" data-feather="chevron-right"></i>
    </span>
  </a>
</div>

<?php endif; wp_reset_postdata(); ?>