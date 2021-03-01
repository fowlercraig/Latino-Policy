@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container flex space-x-4 md:space-x-6 xl:space-x-10">
      <div class="w-64 flex-none border-r border-gray-100 pr-4 md:pr-6 xl:pr-10">
        <div class="sticky top-20">
          @shortcode('[ajax_load_more_filters id="issues" target="6985964360"]')
        </div>
      </div>
      <div class="w-full">
        @shortcode('[ajax_load_more 
          repeater="template_1" 
          post_type="people" 
          posts_per_page="8" 
          taxonomy="role" 
          taxonomy_terms="experts" 
          taxonomy_operator="IN" 
          scroll_distance="-1200"
          transition_container_classes="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 xl:gap-10"
          filters="true" id="6985964360"
        ]')
      </div>
    </div>
  @endwhile
@endsection
