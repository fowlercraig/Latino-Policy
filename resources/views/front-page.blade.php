@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    <div class="carousel">
      <div><div class="aspect-ratio aspect-ratio--16x9 bg-grey-lighter"></div></div>
      <div><div class="aspect-ratio aspect-ratio--16x9 bg-grey-darker"></div></div>
      <div><div class="aspect-ratio aspect-ratio--16x9 bg-grey-dark"></div></div>
      <div><div class="aspect-ratio aspect-ratio--16x9 bg-grey-lighter"></div></div>
    </div>

  @endwhile
@endsection
