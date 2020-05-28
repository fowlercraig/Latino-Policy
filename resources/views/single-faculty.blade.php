@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header-faculty')
    @include('partials.content-single-'.get_post_type())
    @include('partials.content-relationship')
    @include('partials.people.related-experts')
  @endwhile
@endsection
