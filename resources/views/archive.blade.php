@extends('layouts.app')

@section('content')
  @include('partials.page-header')

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
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
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
  
@endsection
