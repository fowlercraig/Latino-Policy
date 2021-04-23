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
    <div class="grid grid-cols-4 gap-10">
      <div class="filter-wrapper">
        <div class="p-6 bg-gray-50 text-sm">
          @set($post_type,get_queried_object())
          @includeFirst(['partials.alm-filter-' . get_post_type(), 'partials.alm-filter'], ['id'=>6985964360])
        </div>
      </div>
      <div class="col-span-3">
        @shortcode('[ajax_load_more 
          archive="true" 
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
