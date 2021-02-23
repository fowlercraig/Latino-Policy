@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @if (have_posts())
    <div class="container">
      @shortcode('[ajax_load_more 
        loading_style="blue"
        posts_per_page="10" 
        transition_container_classes="grid grid-cols-2 lg:grid-cols-5 gap-2 md:gap-4 xl:gap-10" 
        repeater="template_1" 
        post_type="any" 
        placeholder="true"
        scroll_distance="-1200"
        archive="true" 
      ]')
    </div>
  @endif

@endsection
