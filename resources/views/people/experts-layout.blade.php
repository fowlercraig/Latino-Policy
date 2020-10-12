<div class="flex relative" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">

  <div 
    :class="{ 'block': sidebarOpen, 'hidden': !sidebarOpen }"
    class="absolute z-20 md:relative transition ease duration-500 hidden md:flex md:flex-shrink-0 bg-white md:bg-transparent shadow-xl md:shadow-none p-4 md:p-0 -ml-4 mt-8 md:m-0">
    <div class="flex flex-col w-64">
      <div class="flex flex-col md:h-0 flex-1 md:border-r border-gray-200">
        <div class="flex-1 flex flex-col pt-5 pb-4 px-1 overflow-y-auto">
          @include('partials.sidebar-experts')
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col w-0 flex-1">
    <div class="md:hidden pt-3 sm:pt-3">
      <button @click="sidebarOpen = !sidebarOpen" class="-ml-0.5 -mt-0.5 inline-flex space-x-1 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
        <svg class="h-6 w-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <span class="font-medium">Filter Experts</span>
      </button>
    </div>
    <main class="flex-1 relative z-0 focus:outline-none" tabindex="0" x-data="" x-init="$el.focus()">
      <div class="pt-2 pb-6 md:py-6">
        <div class="px-0 md:px-8">
          <ul id="alm-selected-filters"></ul>
          <?php echo do_shortcode('
            [ajax_load_more 
              filters="true" 
              id="experts" 
              post_type="person" 
              taxonomy="role" 
              taxonomy_terms="expert" 
              taxonomy_operator="IN" 
              transition_container_classes="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-8 lg:gap-12"
              order="ASC" 
              orderby="title"
              repeater="template_1" 
              posts_per_page="12" 
            ]
            '); 
          ?>
        </div>
      </div>
    </main>
  </div>
</div>