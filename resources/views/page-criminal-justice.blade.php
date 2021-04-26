@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-stats')
    @include('partials.list-research',[
      'title'=>'Featured Projects', 
      'post_type'=> ['research','event'],
      'ids'=> get_field('reports')
    ])
    @include('partials.list-news',['title'=>'News & Press', 'tax'=>'criminal-justice'])
    @include('partials.list-people',['title'=>'Featured Experts','role'=>'experts', 'ids'=> get_field('experts') ])
    @include('partials.banner-research')
  @endwhile
@endsection
