@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('newsroom.feature')
    <div class="space-y-10 lg:space-y-16">
      <div></div>
      @include('newsroom.press')
      @if(!get_field('disable_events_section'))
      @include('newsroom.events')
      @endif
      @include('newsroom.press-archive')
      @include('newsroom.press-newsletter')
    </div>
  @endwhile
@endsection
