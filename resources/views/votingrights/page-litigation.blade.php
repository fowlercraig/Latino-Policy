@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-20 container">
      <div class="h-px bg-gray-100"></div>
      @include('modules.overview')
      @include('vrp.current')
      @include('vrp.past')
      @include('partials.back')
    </div>
  @endwhile
@endsection
