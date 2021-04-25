@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container">
      <div class="grid lg:grid-cols-4 gap-4 lg:gap-10">
        <div x-data="{expand:false}" class="filter-wrapper">
          <button @click="expand = !expand" class="py-2 px-2 bg-gray-50 text-sm rounded font-medium block md:hidden w-full text-left">Filter</button>
          <div :class="{'block': expand, 'hidden md:block': !expand}" class="p-2 md:p-6 bg-gray-50 text-sm rounded sticky top-20 mt-1 lg:mt-0">
            @shortcode('[ajax_load_more_filters id="press_filters" target="6985964360"]')
            {{-- @include('partials.alm-filter-press',['id'=>6985964360]) --}}
          </div>
        </div>
        <div class="lg:col-span-3">
          @shortcode('[ajax_load_more 
            css_classes="space-y-10" 
            post_type="press, event"
            theme_repeater="press.php"
            no_results_text="Sorry, nothing found"
            transition_container_classes="space-y-10" 
            meta_relation="AND" 
            filters="true" 
            id="6985964360"
          ]')
        </div>
      </div>
    </div>
  @endwhile
@endsection
