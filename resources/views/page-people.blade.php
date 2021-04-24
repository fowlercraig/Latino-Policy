@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-people',[
        'title'     => 'Featured Staff',
        'ids'       => get_field('staff'),
        'cta'       => 'View all Staff',
        'url'       => '/people/staff'
    ])
    @include('components.divider')
    @include('partials.list-people',[
        'title'     => 'Featured Experts',
        'ids'       => get_field('experts'),
        'cta'       => 'View all Experts',
        'url'       => '/people/experts'
    ])
    @include('components.divider')
    @include('partials.list-people',[
        'title'     => 'Featured Fellows',
        'ids'      => get_field('fellows'),
        'cta'       => 'View all Fellows',
        'url'       => '/people/fellows'
    ])
    @include('components.divider')
    @include('partials.list-people',[
        'title'     => 'Featured Advisory Board',
        'ids'       => get_field('advisors'),
        'cta'       => 'View all Advisory Board',
        'url'       => '/people/advisory-board'
    ])
  @endwhile
@endsection
