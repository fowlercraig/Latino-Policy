@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-research',['title'=>'Featured Projects & Reports', 'ids'=> get_field('reports') ])
    @include('partials.list-people',['title'=>'Featured Experts','role'=>'experts','ids'=> get_field('experts') ])
    @include('partials.page-blocks')
    @include('partials.banner-research')
  @endwhile
@endsection
