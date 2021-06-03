@extends('layouts.home')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="space-y-5 md:space-y-12 xl:space-y-20">
      @include('partials.newsroom-header',[ 'ids'=>get_field('relationship') ])
      @include('partials.banner-newsroom')
      @include('partials.list-events',['title'=>'Featured Events'])
      @include('partials.banner-press')
      @include('partials.newsroom-subscribe')
    </div>
  @endwhile
@endsection