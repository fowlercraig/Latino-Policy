@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="space-y-20">
      <div class="h-px"></div>
      @if (!is_page('leadership'))
        @if (is_page(9))
          @include('vrp.voting')
        @endif
        @include('modules.reports')
        <div class="h-px bg-gray-100"></div>
        @include('modules.experts')
        <div class="h-px bg-gray-100"></div>
        @include('modules.modules')
      @else
        @include('modules.experts')
        @include('work.leadership')
      @endif
      @include('partials.back')
    </div>
  @endwhile
@endsection
