@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="space-y-10">
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
      @include('partials.acf-modules')
    </div>
  @endwhile
@endsection
