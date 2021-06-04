@extends('layouts.app')

@section('content')
  @include('partials.page-header-404')
  <div class="container">
    <div class="prose">
      @if (! have_posts())
        <x-alert type="warning" class="rounded">
          {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-alert>
      @endif
    </div>
  </div>
@endsection
