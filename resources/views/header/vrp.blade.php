@php
  $parent = 637;
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

<div x-description="'Voting Rights Project' flyout menu, show/hide based on flyout menu state." x-show="vrpMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="hidden md:block absolute inset-x-0 transform shadow-lg" style="display: none;">
  <div class="bg-white">
    <div class="container py-6 sm:py-8 lg:py-12 grid grid-cols-5 col-gap-10">
      <div class="col-span-2 space-y-2 pr-10 border-r border-gray-100">
        <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
          @php echo get_the_title($link); @endphp
        </h2> 
        <div class="text-sm">@php echo get_the_excerpt($link) @endphp</div>
        <a class="inline-block font-bold border-b-2 border-brand pb-1 text-brand transition ease duration-200 hover:border-brand-light" href="@php echo get_the_permalink($link); @endphp">
          Learn More
        </a>
      </div>
      <div class="col-span-3 grid sm:grid-cols-2 sm:gap-4 lg:grid-cols-2">
        @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
        @include('header.link')
        @php endwhile @endphp
        <a href="/research/?_issue=voting-rights-project" title="Research Library" class="flex hover:bg-gray-50 transition ease duration-300">
          <div class="flex items-center">
            <div class="ml-4">
              <h5 class="text-2xl sm:text-xl xl:text-2xl leading-6 sm:leading-6 font-bold tracking-tight text-brand-darker mb-0">Research Library</h5>
              <p class="text-gray-500 font-medium text-sm">
                Learn more
              </p>
            </div>
          </div>
          <div class="opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition transform ease duration-150 text-brand pr-2">
            <i data-feather="chevron-right"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

@endif
@php wp_reset_postdata() @endphp