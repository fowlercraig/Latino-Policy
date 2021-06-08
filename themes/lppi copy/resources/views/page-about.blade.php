@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-blocks')
    @include('partials.about-work')
    @include('partials.about-impact')
    @include('components.divider')
    @include('partials.about-history')
  @endwhile
@endsection
