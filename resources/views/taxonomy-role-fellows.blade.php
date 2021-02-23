@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @include('partials.list-people-fellows',[
    'title'   => 'Current Policy Fellows',
    'section' => 'current-fellows',
    'in'      => get_field('current_fellows',3787),
  ])
  @include('components.divider')

  @include('partials.list-people-fellows',[
    'title'   => 'Alumni Fellows',
    'section' => 'past-fellows',
    'notin'   => get_field('current_fellows',3787),
  ])
  @include('components.divider')

@endsection
