@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <h1 class="sr-only">{{ get_bloginfo('name', 'display') }}</h1>

    @include('home.slideshow')

    <div class="relative z-10">
      <div class="h-2 bg-white"></div>
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
    </div>

  @endwhile
@endsection
