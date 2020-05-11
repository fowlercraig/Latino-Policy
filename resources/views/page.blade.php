@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')
    <div class="space-y-20 relative z-40">
      @include('partials.page-content')
    </div>
  @endwhile
@endsection
