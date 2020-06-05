@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-6 container">
      <div class="h-10"></div>
      @include('modules.children')
    </div>
  @endwhile
@endsection
