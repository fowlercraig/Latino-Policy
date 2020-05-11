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
      <div class="border">
        <form role="search" method="get" id="searchform" action="http://www.test.dev/">
 <div>
 <label for="s">Search for:</label>
 <input type="text" value="" name="s" id="s" />
 <input type="hidden" value="1" name="sentence" />
 <input type="hidden" value="product" name="post_type" />
 <input type="submit" id="searchsubmit" value="Search" />
 </div>
 </form>
      </div>
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

