@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
    <div class="space-y-20">
      <div class="h-px bg-gray-100"></div>
      @include('modules.related-reports')
      <div class="h-px bg-gray-100"></div>
      @include('modules.related-experts')
    </div>
  @endwhile
@endsection
