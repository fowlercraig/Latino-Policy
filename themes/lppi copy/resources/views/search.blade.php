@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container">
    @if (! have_posts())
      <div class="prose">
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>
      </div>
    @endif
    @set($term,sanitize_text_field($_GET['s']))
    <div class="xl:w-3/4">
      @shortcode('[ajax_load_more 
        post_type="page, research, event" 
        search="'. $term .'" 
        orderby="relevance" 
        posts_per_page="4" 
        scroll="true" 
        css_classes="space-y-10 mb-10" 
        transition_container_classes="space-y-10" 
        button_label="Show More Results"
      ]')
    </div>
  </div>

  {{-- @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile --}}
  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection
