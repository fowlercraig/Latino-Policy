@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-people',['title'=>'LPPI Staff', 'limit'=>-1, 'ids'=>get_field('lppi_staff'), 'orderby' => 'post__in' ])
    @include('components.divider')
    @include('partials.list-people',['title'=>'Voting Rights Staff', 'limit'=>-1, 'ids'=>get_field('vrp_staff'), 'orderby' => 'post__in'])
  @endwhile
@endsection
