@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header-simple')
    <div class="container pt-10">
      <div class="prose prose-sm sm:prose lg:prose-lg">
        @include('partials.content-page')
      </div>
    </div>
  @endwhile
@endsection
