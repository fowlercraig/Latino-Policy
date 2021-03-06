@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('people.people-header')
    <div class="container space-y-20">
      @include('people.fellows-current')
      @include('people.fellows-past')
      @include('partials.back')
    </div>
  @endwhile
@endsection
