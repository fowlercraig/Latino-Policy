@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('home.slideshow')
    <div class="h-2"></div>
    @include('home.mission')
    @include('home.projects')

    <div class="container space-y-20">
      <div class="h-px bg-transparent"></div>
      @include('vrp.voting')
      @include('modules.news')
    </div>

    <div class="h-20 bg-transparent"></div>
    @include('home.events')
    @include('modules.donate')

  @endwhile
@endsection
