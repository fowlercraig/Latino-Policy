@extends('layouts.app')


@section('content')
@include('partials.page-header')

<div class="max-w-7xl mx-auto px-4 sm:px-6 relative pt-10">
  <div class="flex flex-wrap -mx-lg">
    <div class="w-1/3 px-lg">
      <div class="p-lg bg-white">
        <?php echo do_shortcode('[searchandfilter show_count="1" types="checkbox,checkbox" fields="resource_type,issue" headings="Resource Type,Issue"]'); ?>
      </div>
    </div>
    <div class="w-2/3 px-lg space-y-10 pt-lg">
      @include('partials.search-form')
      @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
      @endif

      @while (have_posts()) @php the_post() @endphp
      @include('partials.issues.issues-item')
      @endwhile

      <div class="w-full px-5">
        {!! get_the_posts_navigation() !!}
      </div>
    </div>
  </div>
</div>

@endsection

