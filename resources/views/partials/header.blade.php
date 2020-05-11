<?php
  //$classes = 'inline-block text-sm uppercase tracking-wide md:tracking-wider leading-6 font-medium font-brand text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
  $classes = 'inline-block uppercase tracking-wider md:tracking-wider leading-6 font-medium font-brand text-white hover:text-white focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
?>


<div class="max-w-7xl mx-auto px-4 sm:px-6">
  <div class="@if (!is_front_page()): border-b border-gray-200 @endif py-2 text-sm text-gray-500">
    <p class="leading-7">Lorem ipsum solor dot sit amet</p>
  </div>
</div>

@if (is_front_page())
<div class="absolute w-full z-50">
@endif

<div x-data="{ mobileMenuOpen: true }" class="relative z-50">
  <div class="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex justify-between items-center py-6">
        <a href="/" class="flex-shrink-0 flex items-center">
          @if (is_front_page())
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')">
          @else
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
          @endif
        </a>
        @include('partials.nav.donate')
      </div>
      @if (is_front_page()) <div class="h-px bg-white-25"></div> @endif
    </div>
  </div>
  <div class="sticky sticky-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="hidden md:flex justify-between items-center h-16">
        <nav class="flex space-x-4 lg:space-x-8">
          <a href="@php echo get_permalink(14); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(14); @endphp</a>
          @include('partials.nav.work')
          @include('partials.nav.issues')
          @include('partials.nav.people')
          <a href="@php echo get_permalink(38); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(38); @endphp</a>
          <a href="@php echo get_permalink(33); @endphp" class="<?php echo $classes; ?> hidden md:inline-block" title="Opens page in same window">Voting Rights project</a>
        </nav>
        <nav class="flex space-x-3">
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="instagram"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="facebook"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="twitter"></i></a>
        </nav>
      </div>
    </div>
  </div>
</div>

@if (is_front_page())
</div>
@endif