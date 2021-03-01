@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-people',['title'=>'Featured Staff', 'ids'=>get_field('staff'), 'url'=>'/role/staff'])
    @include('components.divider')
    @include('partials.list-people',['title'=>'Featured Experts','ids'=>get_field('experts'), 'url'=>'/role/experts'])
    @include('components.divider')
    @include('partials.list-people',['title'=>'Featured Fellows','ids'=>get_field('fellows'), 'url'=>'/role/fellows'])
    @include('components.divider')
    @include('partials.list-people',['title'=>'Featured Advisory Board','ids'=>get_field('advisors'), 'url'=>'/role/advisory-board'])
  @endwhile
@endsection
