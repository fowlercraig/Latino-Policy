@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="space-y-20 container">
      @include('partials.content-page')
    </div>
  @endwhile
@endsection
