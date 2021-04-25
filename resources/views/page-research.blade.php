@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-research',[
      'title'   =>'Featured Projects & Reports', 
      'ids'     => get_field('reports'),
      'orderby' => 'menu_order',
    ])
    <div class="container">@include('components.divider')</div>
    @include('partials.list-people',['title'=>'Featured Experts','role'=>'experts','ids'=> get_field('experts'),'desc'=>get_field('experts_description') ])
    <div class="container">@include('components.divider')</div>
    @include('partials.page-blocks')
    @include('partials.banner-research')
  @endwhile
@endsection
