@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-stats')
    @include('partials.list-research',['title'=>'Featured Projects'])
    @include('partials.list-news',['title'=>'Featured Projects'])
    @include('partials.list-people',['title'=>'Featured Experts','role'=>'experts'])
    @include('partials.banner-research')
  @endwhile
@endsection
