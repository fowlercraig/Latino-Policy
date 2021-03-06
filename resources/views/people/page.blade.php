@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('people.people-header')
    <div class="container space-y-20">
      @include('people.people-role')
      @include('partials.back')
    </div>
  @endwhile
@endsection
