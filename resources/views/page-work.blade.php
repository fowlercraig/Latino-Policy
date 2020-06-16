@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-6 container space-y-16">
      <div></div>
      @include('modules.overview')
      <div>
        @include('modules.children')
      </div>
    </div>
  @endwhile
@endsection
