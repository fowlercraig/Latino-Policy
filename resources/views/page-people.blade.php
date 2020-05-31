@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="space-y-20">
      @include('people.people')
    </div>
  @endwhile
@endsection
