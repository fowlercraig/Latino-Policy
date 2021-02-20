@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @include('partials.page-blocks')
  @include('partials.donate-banner',[
    'title'=>'Support us in advocating for the voting rights of all Americans.',
    'desc'=>'<p>Please consider financially supporting the UCLA Voting Rights Project’s work.</p>'
  ])
@endsection
