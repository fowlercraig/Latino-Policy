@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="container">
    <div class="h-10"></div>
    @if (App\display_sidebar())
    <div class="grid grid-cols-3 gap-12">
    <div class="col-span-2">
    @endif

    @if (!have_posts())
    <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif

    <div class="space-y-6">
    @php echo do_shortcode('[ajax_load_more id="your_alm_id" filters="true" search="'. $term .'" post_type="any"]');  @endphp
    </div>

    <div class="h-20"></div>
    {!! get_the_posts_navigation() !!}

    @if (App\display_sidebar())
    </div>

    <aside class="sidebar order-first">
    @include('partials.sidebar')
    </aside>

    </div>
    @endif
  </div>  
@endsection
