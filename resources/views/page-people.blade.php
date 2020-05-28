@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')

    <div class="md:space-y-20">
      @include('partials.people.staff')
      @include('partials.people.experts')
      @include('partials.people.fellows')
      @include('partials.people.advisors')
    </div>

  @endwhile
@endsection
