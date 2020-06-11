@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-4 md:space-y-20 container max-w-none">
      <div class="h-px bg-gray-100"></div>
      @include('modules.modules')
      <div class="h-px bg-gray-100"></div>
      @include('about.work')
      <div class="h-px bg-gray-100"></div>
      @include('about.impact')
      <div class="h-px bg-gray-100"></div>
      @include('about.history')
    </div>
  @endwhile
@endsection
