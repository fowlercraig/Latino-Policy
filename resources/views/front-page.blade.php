@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home.slideshow')
    @include('partials.page-content')
    @if (get_field('enable_alert_modal','options'))
      @include('partials.home.modal')
    @endif
  @endwhile
@endsection
