@extends('layouts.app')

@section('content')
  <div class="space-y-10">
    <div class="container flex">
      <div class="w-64 flex-none">
        @include('partials.sidebar')
      </div>
      <div class="md:pl-16">
        <ul id="alm-selected-filters"></ul>
        @php echo do_shortcode('
           [ajax_load_more 
              id="pressarchive" 
              target="pressfilters"
              filters="true"
              post_type="press, event"
              placeholder="true" transition_container="false" 
              no_results_text="Sorry, nothing found"
           ]'); 
        @endphp
      </div>
    </div>
  </div>
@endsection
