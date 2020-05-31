@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container space-y-20">
      @include('partials.content-single-'.get_post_type())
      @include('modules.related-reports-'.get_post_type())
      @include('modules.related-experts')
    </div>
  @endwhile
@endsection
