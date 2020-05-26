@extends('layouts.app')

@section('content')
  <div class="relative bg-brand-darker">
    <div class="relative z-10">
      @include('partials.page-header-newsroom')
      @include('partials.newsroom.feature')
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>

  @include('partials.newsroom.press')

  <div class="relative pt-10 lg:pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 relative z-10">
      <div>
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-0">News & Press</h2> 
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        @while(have_posts()) @php(the_post())
        @include('partials.modules.article-item')
        @endwhile
      </div>
    </div>
    <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0 lg:-mt-20">
      <img class="opacity-50 w-full" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>


@endsection