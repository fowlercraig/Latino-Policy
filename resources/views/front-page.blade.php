@extends('layouts.app')



@section('content')
  @while(have_posts()) @php(the_post())
    <div class="space-y-10">
      @include('partials.home.home-carousel')
      @include('partials.home.home-mission')
      @include('partials.home.home-projects')
      @include('partials.home.home-votingrights')
      @include('partials.home.home-news')
      @include('partials.home.home-donate')
    </div>
  @endwhile
@endsection
