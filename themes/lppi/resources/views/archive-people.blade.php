@set($people,3709)

@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @include('partials.list-people',['title'=>'Featured Staff','ids'=>get_field('staff',$people)])
  @include('components.divider')
  @include('partials.list-people',['title'=>'Featured Experts','role'=>'experts'])
  @include('components.divider')
  @include('partials.list-people',['title'=>'Featured Fellows','role'=>'fellows'])
  @include('components.divider')
  @include('partials.list-people',['title'=>'Featured Advisory Board','role'=>'advisory-board'])
@endsection
