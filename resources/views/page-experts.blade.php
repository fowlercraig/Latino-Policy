@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false" class="space-y-5 md:space-y-12 xl:space-y-20">
      <div class="container md:hidden">
        <button @click="sidebarOpen = !sidebarOpen" class="border border-gray-100 hover:border-gray-200 text-sm font-medium px-2 py-2 rounded flex items-center">
          <div :class="{ 'hidden': sidebarOpen, 'block': !sidebarOpen }"><i height="20" width="20" stroke-width="1.5" data-feather="menu"></i></div>
          <div :class="{ 'block': sidebarOpen, 'hidden': !sidebarOpen }"><i height="20" width="20" stroke-width="1.5" data-feather="x"></i></div>
          <span class="ml-2">Filter Experts</span>
        </button>
      </div>
      <div class="container flex md:space-x-6 xl:space-x-10">
        <div
          :class="{ 'block': sidebarOpen, 'hidden': !sidebarOpen }"
          class="hidden md:block absolute md:relative bg-white shadow-lg z-20 p-4 md:p-0 md:shadow-none md:w-48 lg:w-64 flex-none md:border-r md:border-gray-100 pr-4 md:pr-6 xl:pr-10">
          <div class="md:sticky top-20">
            @shortcode('[ajax_load_more_filters id="issues" target="6985964360"]')
          </div>
        </div>
        <div class="w-full">
          @shortcode('[ajax_load_more 
            repeater="template_1" 
            post_type="people" 
            posts_per_page="12" 
            taxonomy="role" 
            taxonomy_terms="experts" 
            taxonomy_operator="IN" 
            scroll_distance="-1200"
            transition_container_classes="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-10"
            filters="true" id="6985964360"
          ]')
        </div>
      </div>
    </div>
  @endwhile
@endsection
