@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-20 container">
      <div class="h-px bg-transparent"></div>
      @if (get_field('matters'))
        @include('modules.matters')
        <div class="h-px bg-gray-100"></div>
      @endif
      @include('modules.needtoknow')
      <div class="h-px bg-gray-100"></div>
      @include('modules.reports')
      <div class="h-px bg-gray-100"></div>
      @include('modules.news')
      <div class="h-px bg-gray-100"></div>
      @include('modules.experts')
      <div class="h-px bg-transparent"></div>
      @include('modules.research')
      @include('partials.back')
    </div>
  @endwhile
@endsection
