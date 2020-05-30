<div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-20  top-0 inset-x-0 p-2 transition transform origin-top-right xl:hidden">
  <div class="rounded-lg shadow-lg">
    <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5 space-y-6 sm:space-y-8 sm:pb-8">
        <div class="flex items-center justify-between">
          <div>
            <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
          </div>
          <div class="-mr-2">
            <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
              <span class="sr-only">Close Mobile Menu</span>
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
        <div>
          <nav class="space-y-8">
            <div class="grid gap-7 sm:grid-cols-2 sm:row-gap-8 sm:col-gap-4">

              @php
                $link = 7;
                $args = array(
                  'post_type'      => 'page',
                  'posts_per_page' => -1,
                  'post__in'       => array( 658, 7, 154, 637, 630,  656 ),
                  'order'          => 'ASC',
                  'orderby'        => 'post__in'
                );
                $parent = new WP_Query( $args );
                if ( $parent->have_posts() ):
              @endphp
              @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
              <a href="@php the_permalink(); @endphp" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                <div class="text-lg leading-6 font-medium text-brand-dark">
                  @php the_title(); @endphp
                </div>
                <div class="flex-grow"></div>
                <i height="18" width="18" class="opacity-25" data-feather="chevron-right"></i>
              </a>
              @php endwhile; endif; @endphp
            </div>
          </nav>
        </div>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-2 gap-4">
          <a href="/research-library" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
            Research Library
          </a>
          <a href="/press-archive" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
            Press Archive
          </a>
          <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
            Careers
          </a>
          <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-600 transition ease-in-out duration-150">
            Campus Resources
          </a>
        </div>
      </div>
    </div>
  </div>
</div>