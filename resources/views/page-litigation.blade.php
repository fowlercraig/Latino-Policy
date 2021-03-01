@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.list-litigation',['title'=>'Recent Litigation', 'ids' => get_field('recent_litigation')])
    @include('partials.list-litigation',['title'=>'Past Litigation', 'ids' => get_field('past_litigation')])
  @endwhile
@endsection
