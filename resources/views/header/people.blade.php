@php
  $parent = 630;
  $link = $parent;
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $parent,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<div x-description="'People' flyout menu, show/hide based on flyout menu state." x-show="peopleMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="hidden md:block absolute inset-x-0 transform shadow-lg" style="display: none;">
  <div class="bg-white">
    <div class="container py-6 sm:py-8 lg:py-12 grid grid-cols-5 col-gap-10">
      <div class="col-span-2 space-y-2 pr-10 border-r border-gray-100">
        <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
          @php echo get_the_title($link); @endphp
        </h2> 
        <div class="text-sm">@php echo get_the_excerpt($link) @endphp</div>
        <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo get_the_permalink($link); @endphp">
          View People
        </a>
      </div>
      <div class="col-span-3 grid sm:grid-cols-2 sm:gap-4 lg:grid-cols-2">
        @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
        @include('header.link')
        @php endwhile @endphp
      </div>
    </div>
  </div>
</div>

@endif
@php wp_reset_postdata() @endphp