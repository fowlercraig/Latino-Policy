@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="grid grid-cols-3 gap-10">
    <div class="filter-wrapper">
      <div class="p-6 bg-gray-50 text-sm">
        @include('partials.alm-filter',['id'=>6985964360])
      </div>
    </div>
    <div class="col-span-2">
      <ul id="alm-selected-filters"></ul>
      @shortcode('[ajax_load_more archive="true" filters="true" id="6985964360"]')
    </div>
  </div>

@endsection
