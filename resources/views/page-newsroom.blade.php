@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('newsroom.feature')
    <div class="space-y-10 lg:space-y-20">
      <div></div>
      @include('newsroom.press')
      @include('newsroom.events')
      @include('newsroom.press-archive')
    </div>
  @endwhile
@endsection
