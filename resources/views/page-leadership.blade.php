@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-blocks')
    @include('partials.list-people',['title'=>'Current Fellows','role'=>'fellows','limit'=>8])
    @include('partials.info-blocks')
  @endwhile
@endsection
