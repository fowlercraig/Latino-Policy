@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('people.people-header')
    <div class="relative overflow-hidden">
      <div class="space-y-20 container relative z-20">
        @include('people.people-all')
        <div class="spacer"></div>
      </div>
    </div>
  @endwhile
@endsection
