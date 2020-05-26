@extends('layouts.app')

@section('content')
  <div class="relative bg-brand-darker">
    <div class="relative z-10">
      @include('partials.page-header-newsroom')
      @include('partials.newsroom.feature')
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>

  @include('partials.newsroom.press')

@endsection