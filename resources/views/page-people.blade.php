@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')

    <div class="md:space-y-20">
      <section id="staff"></section>
      @include('partials.people.staff')
      <section id="experts" class="h-px bg-gray-100"></section>
      @include('partials.people.experts')
      <section id="fellows" class="h-px bg-gray-100"></section>
      @include('partials.people.fellows')
      <section id="advisors" class="h-px bg-gray-100"></section>
      @include('partials.people.advisors')
    </div>

  @endwhile
@endsection
