@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')

    <div class="md:space-y-20">
      <div id="staff"></div>
      @include('partials.people.staff')
      <div id="experts" class="h-px bg-gray-100"></div>
      @include('partials.people.experts')
      <div id="fellows" class="h-px bg-gray-100"></div>
      @include('partials.people.fellows')
      <div id="advisors" class="h-px bg-gray-100"></div>
      @include('partials.people.advisors')
    </div>

  @endwhile
@endsection
