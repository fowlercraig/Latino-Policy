@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
    <div class="space-y-20">
      @include('modules.related-reports-'.get_post_type())
      @include('modules.related-experts')
    </div>
  @endwhile
@endsection
