@php
  $link = 7;
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $link,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ):
@endphp

<!-- Work menu -->
<div x-description="'Work' flyout menu, show/hide based on flyout menu state." x-show="solutionsMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="hidden md:block absolute inset-x-0 transform shadow-lg" style="display: none;">
  <div class="bg-white">
    <div class="container grid row-gap-6 py-6 sm:grid-cols-2 sm:gap-8 sm:py-8 lg:grid-cols-3 lg:py-12">
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('header.link')
      @php endwhile @endphp
    </div>
  </div>
</div>

@endif
@php wp_reset_postdata() @endphp