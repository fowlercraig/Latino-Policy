@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-fellows-current')
    @include('partials.list-fellows-past')
  @endwhile
@endsection
