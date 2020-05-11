@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.home.slideshow')
    <div class="space-y-20 relative z-40">
      @include('partials.page-content')
    </div>
  @endwhile
@endsection
