@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="flex flex-wrap -mx-10">

      <div class="w-1/4 px-10">
        <div class="menu mb-16">
          <h3 class="font-bold border-b border-grey-light pb-2">Resource Type</h3>
          <?php dynamic_sidebar( 'primary' ); ?>
        </div>
        <div class="menu mb-16">
          <h3 class="font-bold border-b border-grey-light pb-2">Issue</h3>
        </div>
        <div class="menu mb-16">
          <h3 class="font-bold border-b border-grey-light pb-2">People</h3>
        </div>
      </div>

      <div class="w-3/4 px-10">
        @if (!have_posts())
        <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
        @include('partials.press.post-item')
        @endwhile

        {!! get_the_posts_navigation() !!}
      </div>

    </div>

@endsection