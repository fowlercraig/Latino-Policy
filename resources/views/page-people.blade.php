@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('people.people-header')
    <div class="relative overflow-hidden">
      <div class="space-y-20 container relative z-20">
        @include('people.people-all')
        <div class="spacer"></div>
      </div>
      <?php /*
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
      */?>
    </div>

    <?php /*
    <style>
      .circle {
        background: rgb(39,116,174);
        background: radial-gradient(circle, rgba(39,116,174,1) 0%, rgba(39,116,174,0) 50%, rgba(0,212,255,0) 100%);
      }
    </style>
    */ ?>

  @endwhile
@endsection
