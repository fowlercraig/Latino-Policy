@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="container">
    <div class="grid lg:grid-cols-4 gap-10">
      <div x-data="{expand:false}" class="filter-wrapper">
        <button @click="expand = !expand" class="py-2 px-2 bg-gray-50 text-sm rounded font-medium block md:hidden w-full text-left">Filter</button>
        <div :class="{'block': expand, 'hidden md:block': !expand}" class="p-2 md:p-6 bg-gray-50 text-sm rounded sticky top-20 mt-1 lg:mt-0">
          @shortcode('[ajax_load_more_filters id="research_library" target="6985964360"]')
        </div>
      </div>
      <div class="lg:col-span-3">
        @shortcode('[ajax_load_more 
          archive="true" 
          id="research_library"
          theme_repeater="' . get_post_type() . '.php"
          css_classes="space-y-10" 
          transition_container_classes="space-y-10" 
          meta_relation="AND" 
          filters="true" 
          id="6985964360"
        ]')
      </div>
    </div>
  </div>

@endsection
