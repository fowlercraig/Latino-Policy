@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="container">
    <div class="h-10"></div>
    @if (App\display_sidebar())
    <div class="sticky-container grid grid-col-1 lg:grid-cols-3 gap-12">
    <div class="lg:col-span-2">
    @endif

    @if (!have_posts())
    <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif

    <div class="space-y-6">
      <ul id="alm-selected-filters"></ul>
      @php echo do_shortcode('
         [ajax_load_more 
            id="your_alm_id" 
            filters="true"
            post_type="press, event"
            placeholder="true" transition_container="false" 
            no_results_text="Sorry, nothing found"
         ]'); 
      @endphp
    </div>

    @if (App\display_sidebar())
    </div>

    <aside class="sidebar order-first relative">
      @include('partials.sidebar')
    </aside>

    </div>
    @endif
  </div>  
@endsection
