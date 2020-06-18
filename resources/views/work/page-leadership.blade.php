@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="relative z-10">
      @include('partials.page-header')
    </div>
    <div class="space-y-10 lg:space-y-16 container max-w-none relative z-10">
      <div class="h-px"></div>
      @include('modules.overview')
      @include('work.overview')
      @include('modules.experts')
      @include('work.leadership')
      @include('partials.back')
      <div class="h-px"></div>

      <div class="absolute top-0 left-0 hidden lg:block rellax" data-rellax-speed="-7">
        @php echo wp_get_attachment_image( 1300, 'large' ); @endphp
      </div>
      <div class="absolute top-1/3 right-0 hidden lg:block rellax" data-rellax-speed="-7">
        @php echo wp_get_attachment_image( 1301, 'large' ); @endphp
      </div>
      <div class="absolute top-1/3 right-0 hidden lg:block rellax opacity-50" data-rellax-speed="-7">
        <div class="translate-x-1/2 transform scale-150">
          <div class="circle rounded-full h-circle w-circle"></div>
        </div>
      </div>
      <div class="absolute top-0 left-0 hidden lg:block rellax opacity-50" data-rellax-speed="-7">
        <div class="-translate-x-1/2 transform scale-150">
          <div class="circle rounded-full h-circle w-circle"></div>
        </div>
      </div>
    </div>
    <div id="background" class="absolute inset-0 z-0 opacity-50"></div>
    <style>
      #background {
        background: rgb(118,121,9);
        background: linear-gradient(0deg, #fe9a4f 0%, #f7755a 49%, #eda6a0 100%);
      }
    </style>
  @endwhile
@endsection
