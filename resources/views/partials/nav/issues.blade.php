<div x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative">  
  <button 
    type="button" 
    x-state:on="Item active" 
    x-state:off="Item inactive" 
    @click="flyoutMenuOpen = !flyoutMenuOpen" 
    :class="{ 'text-white': flyoutMenuOpen, 'text-white': !flyoutMenuOpen }" 
    class="group inline-flex items-center space-x-1 <?php echo $classes; ?>">
    <span>Issues</span>
    <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-bind-class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
  </button>

  <div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute -ml-4 mt-3 transform px-2 w-screen max-w-sm sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/4" style="display: none;">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs overflow-hidden">
        <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
          <a href="/issues" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600 opacity-0" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            <p class="text-2xl leading-6 font-bold text-gray-900 border-b pb-2">
              Issues
            </p>
          </a>
          @php 
            $args = array (
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => 115,
              'order'          => 'ASC',
              'orderby'        => 'menu_order'
            );
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query($args);
            while ($wp_query->have_posts()) : $wp_query->the_post();
          @endphp 

          @include('partials.nav.sublink')
          @php 
            endwhile;
            $wp_query = null;
            $wp_query = $temp;  // Reset
            wp_reset_postdata();
          @endphp 

        </div>
      </div>
    </div>
  </div>
</div>