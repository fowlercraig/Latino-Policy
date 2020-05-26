<?php
  //$classes = 'inline-block text-sm uppercase tracking-wide md:tracking-wider leading-6 font-medium font-brand text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
  $classes = 'inline-block uppercase tracking-wider md:tracking-wider leading-6 font-medium font-brand text-white hover:text-white focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
?>


@if (get_field('enable_alert_banner','options'))
<div class="@if (!is_front_page()): bg-brand-lightest @endif relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="py-3 text-xs text-gray-500">
      <div class="leading-tight"><?php the_field('alert_banner_message','options'); ?></div>
    </div>
  </div>
</div>
@endif

@if (is_front_page())
<div class="absolute w-full z-50">
@endif

<div x-data="{ menusOpen: false, mobileMenuOpen: false, solutionsMenuOpen: false, moreMenuOpen: false, peopleMenuOpen: false }" class="z-50 relative">
  <div class="relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center py-5 sm:py-6 md:justify-between md:space-x-10">
      <div>
        <a href="/" class="flex-shrink-0 flex items-center w-48 md:w-auto">
          @if (is_front_page())
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')">
          @else
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
          @endif
        </a>
      </div>
      <div class="hidden lg:flex items-center space-x-8">
        @include('partials.nav.donate')
      </div>
      <div class="-mr-2 -my-2 lg:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    @if (is_front_page()) <div class="h-px bg-white-25"></div> @endif
    <div 
      class="hidden lg:block sticky-header transition duration-200" 
      :class="{ 'bg-black': menusOpen }" 
      >
      <div class="h-16 md:flex-1 md:flex md:items-center md:justify-between md:space-x-12 max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="flex space-x-4 lg:space-x-8">
          <a href="@php echo get_permalink(14); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(14); @endphp</a>
          <div class="relative">
            <button 
              type="button" 
              @click="solutionsMenuOpen = !solutionsMenuOpen; moreMenuOpen = false; peopleMenuOpen = false;" 
              @click.away="solutionsMenuOpen = false;"
              x-state:on="Item active" 
              x-state:off="Item inactive" 
              :class="{ 'text-brand-darker hover:text-brand-dark': solutionsMenuOpen, 'text-white': !solutionsMenuOpen }" 
              class="group inline-flex items-center space-x-2 <?php echo $classes; ?>">
              <span>Work</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button 
              type="button" 
              @click="moreMenuOpen = !moreMenuOpen; solutionsMenuOpen = false; peopleMenuOpen = false;" 
              @click.away="moreMenuOpen = false"
              x-state:on="Item active" 
              x-state:off="Item inactive" 
              :class="{ 'text-blue-darker': moreMenuOpen, 'text-white': !moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" 
              class="group inline-flex items-center space-x-2 <?php echo $classes; ?>">
              <span>Issues</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <a href="@php echo get_permalink(586); @endphp" class="<?php echo $classes; ?> hidden md:inline-block" title="Opens page in same window">@php echo get_the_title(586); @endphp</a>
          <div class="relative">
            <button 
              type="button" 
              @click="peopleMenuOpen = !peopleMenuOpen; solutionsMenuOpen = false; moreMenuOpen = false;" 
              x-state:on="Item active" 
              x-state:off="Item inactive" 
              :class="{ 'text-white-50': moreMenuOpen, 'text-white': !moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" 
              class="group inline-flex items-center space-x-2 <?php echo $classes; ?>">
              <span>People</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <a href="@php echo get_permalink(38); @endphp" class="<?php echo $classes; ?>" title="Opens page in same window">@php echo get_the_title(38); @endphp</a>
        </nav>
        <nav class="flex space-x-3">
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="instagram"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="facebook"></i></a>
          <a href="#" class="<?php echo $classes; ?>" title="Opens page in same window"><i data-feather="twitter"></i></a>
        </nav>
      </div>
    </div>
  </div>

  @include('partials.nav.work')
  @include('partials.nav.issues')
  @include('partials.nav.people')
  @include('partials.nav.mobile')

</div>

@if (is_front_page())
</div>
@endif