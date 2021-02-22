@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-blocks')
    @include('partials.banner-donate',[
      'title'=>'Support us in advocating for the voting rights of all Americans.',
      'desc'=>'<p>Please consider financially supporting the UCLA Voting Rights Project’s work.</p>'
    ])
  @endwhile
@endsection
