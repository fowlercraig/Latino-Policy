@extends('layouts.home')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="bg-gradient-to-t from-yellow-200 to-red-200 space-y-8 md:space-y-12 xl:space-y-20 pt-8 md:py-12 xl:py-20 mb-8 md:mb-12 xl:mb-20">
      @include('partials.page-blocks')
      @include('partials.list-people',['title'=>'Current Fellows','role'=>'fellows','limit'=>8])
    </div>
    @include('partials.info-blocks')
  @endwhile
@endsection
