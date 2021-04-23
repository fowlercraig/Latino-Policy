@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container">
      <div class="grid grid-cols-4 gap-10">
        <div class="filter-wrapper">
          <div class="p-6 bg-gray-50 text-sm">
            @include('partials.alm-filter-press',['id'=>6985964360])
          </div>
        </div>
        <div class="col-span-3">
          @shortcode('[ajax_load_more 
            css_classes="space-y-10" 
            post_type="event, press" 
            theme_repeater="press.php"
            transition_container_classes="space-y-10" 
            meta_relation="AND" filters="true" 
            id="6985964360"
          ]')
        </div>
      </div>
    </div>
  @endwhile
@endsection
