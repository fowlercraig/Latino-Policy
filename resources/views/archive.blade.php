@extends('layouts.app')

@section('content')
  @include('partials.archive-header')
  <div class="container">
    <div class="h-10"></div>
    @if (App\display_sidebar())
    <div class="sticky-container flex flex-wrap lg:grid lg:grid-cols-3 gap-12">
    <div class="col-span-2">
    @endif

    @if (!have_posts())
    <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif

    <div class="space-y-6">
      @php echo do_shortcode('
         [ajax_load_more 
            id="your_alm_id" 
            filters="true"
            post_type="research"
            placeholder="true" transition_container="false" 
            archive="true"
            css_classes="space-y-6"
            no_results_text="Sorry, nothing found"
         ]'); 
      @endphp
    </div>

    @if (App\display_sidebar())
    </div>

    <aside class="w-full col-span-1 sidebar order-first relative mb-10 lg:mb-0">
      @include('partials.sidebar')
    </aside>

    </div>
    @endif
  </div>  

  @php
    // adding this so purgecss doesn't purge generated classes by ALM
  @endphp
  <div class="my-10 h-px bg-gray-100 hidden"></div>

@endsection
