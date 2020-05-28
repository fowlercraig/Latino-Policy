<?php
  //$classes = 'inline-block text-sm uppercase tracking-wide md:tracking-wider leading-6 font-medium font-brand text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
  $classes = 'inline-block uppercase tracking-wider md:tracking-wider leading-6 font-medium font-brand text-white hover:text-white focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
?>


@if (get_field('enable_alert_banner','options'))
<div class="@if (!is_front_page()): bg-brand-lightest @endif relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="py-3 text-xs text-gray-600">
      <p class="leading-tight text-center"><?php the_field('alert_banner_message','options'); ?></p>
    </div>
  </div>
  @if (!is_front_page())
  <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0">
    <img 
      alt="Pattern"
      class="opacity-50" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
  @endif
</div>
@endif

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
    <div class="max-w-7xl mx-auto px-4 sm:px-6" x-data="{ solutionsMenuOpen: false }">
      <div class="hidden md:flex justify-between items-center h-16">
        <nav class="flex space-x-4 lg:space-x-8">
          <a href="@php echo get_permalink(14); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(14); @endphp</a>
          <button type="button" @click="solutionsMenuOpen = !solutionsMenuOpen; moreMenuOpen = false" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': solutionsMenuOpen, 'text-gray-600': !solutionsMenuOpen }" class="<?php echo $classes; ?> group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-gray-900">
            <span class="text-white">Work</span>
            <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-white group-focus:text-gray-600 transition ease-in-out duration-150 text-white" :class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          @include('partials.nav.issues')
          @include('partials.nav.people')
          <a href="@php echo get_permalink(38); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(38); @endphp</a>
          <a href="@php echo get_permalink(586); @endphp" class="<?php echo $classes; ?> hidden md:inline-block" title="Opens page in same window">@php echo get_the_title(586); @endphp</a>
        </nav>
        <nav class="flex space-x-3">
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="instagram"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="facebook"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="twitter"></i></a>
        </nav>
      </div>
      @include('partials.nav.work')
    </div>
  </div>
</div>

@if (is_front_page())
</div>
@endif