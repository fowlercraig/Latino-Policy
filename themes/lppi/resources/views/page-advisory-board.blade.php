@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-people',['title'=>'', 'limit'=>-1, 'ids'=>get_field('lppi_advisors'), 'orderby' => 'post__in' ])
  @endwhile
@endsection
