@extends('layouts.app')

@section('content')

  @if (!have_posts())

  <div class="py-20 space-y-10">

    <div class="container">
      <h2 class="mt-1 text-4xl tracking-tight leading-10 font-extrabold text-brand sm:leading-none sm:text-6xl lg:text-5xl">
        Error 404
        <br class="inline">
        <span class="text-brand-darker">Page Not Found</span>
      </h2>
      <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
        {{ __("Unfortunately, we can't find that page — but here are some of our latest reports and projects.", 'sage') }}
      </p>
    </div>

    @include('partials.error-projects')

  </div>

  @endif
@endsection
