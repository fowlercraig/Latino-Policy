@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container space-y-6">

    <div class=""></div>

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

</div>

  {!! get_the_posts_navigation() !!}
@endsection
