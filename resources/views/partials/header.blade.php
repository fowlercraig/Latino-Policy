<?php
  //$classes = 'inline-block text-sm uppercase tracking-wide md:tracking-wider leading-6 font-medium font-brand text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
  $classes = 'inline-block uppercase tracking-wider md:tracking-wider leading-6 font-medium font-brand text-white hover:text-white focus:outline-none focus:text-gray-900 transition ease-in-out duration-150';
?>


@if (get_field('enable_alert_banner','options'))
<div class="@if (!is_front_page()): bg-brand-lightest @endif relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="py-3 text-xs text-gray-500">
      <p class="leading-tight text-center"><?php the_field('alert_banner_message','options'); ?></p>
    </div>
  </div>
  @if (!is_front_page())
  <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0">
    <img class="opacity-50" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
  @endif
</div>
@endif

@if (is_front_page())
<div class="absolute w-full z-50">
@endif

<div x-data="{ mobileMenuOpen: false, solutionsMenuOpen: false, moreMenuOpen: false }" class="z-50 relative">
  <div class="relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center py-5 sm:py-6 md:justify-between md:space-x-10">
      <div>
        <a href="/" class="flex-shrink-0 flex items-center">
          @if (is_front_page())
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')">
          @else
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-14 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
          @endif
        </a>
      </div>
      <div class="flex items-center space-x-8">
        @include('partials.nav.donate')
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    @if (is_front_page()) <div class="h-px bg-white-25"></div> @endif
    <div class="hidden md:block sticky-header transition duration-200" :class="{ 'bg-white border-b border-gray-200': solutionsMenuOpen }">
      <div class="h-16 md:flex-1 md:flex md:items-center md:justify-between md:space-x-12 max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="flex space-x-10">
          <a href="/about" :class="{ 'text-gray-500': moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" class="text-base leading-6 font-medium text-white hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            About
          </a>
          <div class="relative">
            <button type="button" @click="solutionsMenuOpen = !solutionsMenuOpen; moreMenuOpen = false" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-blue-darker': solutionsMenuOpen, 'text-white': !solutionsMenuOpen }" class="group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-white">
              <span>Work</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button type="button" @click="moreMenuOpen = !moreMenuOpen; solutionsMenuOpen = false" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-blue-darker': moreMenuOpen, 'text-white': !moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" class="group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-white">
              <span>Issues</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button type="button" @click="moreMenuOpen = !moreMenuOpen; solutionsMenuOpen = false" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-white-50': moreMenuOpen, 'text-white': !moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" class="group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-white">
              <span>People</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <a href="#" :class="{ 'text-gray-500': moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" class="text-base leading-6 font-medium text-white hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            Newsroom
          </a>
          <a href="#" :class="{ 'text-gray-500': moreMenuOpen, 'text-gray-500': solutionsMenuOpen }" class="text-base leading-6 font-medium text-white hover:text-white-50 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            The Voting Rights Project
          </a>
        </nav>
      </div>
    </div>
  </div>

  @include('partials.nav.work')

  <!-- More menu -->
  <div x-description="'More' flyout menu, show/hide based on flyout menu state." x-show="moreMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" class="hidden md:block absolute inset-x-0 transform shadow-lg" style="display: none;">
    <div class="absolute inset-0 flex">
      <div class="bg-white w-1/2"></div>
      <div class="bg-gray-50 w-1/2"></div>
    </div>
    <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
      <nav class="grid row-gap-10 px-4 py-8 bg-white sm:grid-cols-2 sm:col-gap-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
        <div class="space-y-5">
          <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
            Company
          </h3>
          <ul class="space-y-6">
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>About</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <span>Customers</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <span>Press</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>Careers</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span>Privacy</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="space-y-5">
          <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
            Resources
          </h3>
          <ul class="space-y-6">
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <span>Community</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
                <span>Partners</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>Guides</span>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>Webinars</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="space-y-6 bg-gray-50 px-4 py-8 sm:py-12 sm:px-6 lg:px-8 xl:pl-12">
        <div class="space-y-6">
          <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
            From the blog
          </h3>
          <ul class="space-y-6">
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100 transition ease-in-out duration-150 sm:space-x-8">
                <div class="hidden sm:block flex-shrink-0">
                  <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2849&amp;q=80" alt="">
                </div>
                <div class="space-y-1 w-0 flex-1">
                  <h4 class="text-base leading-6 font-medium text-gray-900 truncate">
                    Boost your conversion rate
                  </h4>
                  <p class="text-sm leading-5 text-gray-500">
                    Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.
                  </p>
                </div>
              </a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100 transition ease-in-out duration-150 sm:space-x-8">
                <div class="hidden sm:block flex-shrink-0">
                  <img class="w-32 h-20 object-cover rounded-md" src="https://images.unsplash.com/1/apple-gear-looking-pretty.jpg?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2850&amp;q=80" alt="">
                </div>
                <div class="space-y-1 w-0 flex-1">
                  <h4 class="text-base leading-6 font-medium text-gray-900 truncate">
                    How to use search engine optimization to drive traffic to your site
                  </h4>
                  <p class="text-sm leading-5 text-gray-500">
                    Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="text-sm leading-5 font-medium">
          <a href="#" class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
            View all posts →
          </a>
        </div>
      </div>
    </div>
  </div>

  <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-20  top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6 sm:space-y-8 sm:pb-8">
          <div class="flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="/img/logos/workflow-mark-on-white.svg" alt="Workflow">
            </div>
            <div class="-mr-2">
              <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
          </div>
          <div>
            <nav class="space-y-8">
              <div class="grid gap-7 sm:grid-cols-2 sm:row-gap-8 sm:col-gap-4">
                <a href="#" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Analytics
                  </div>
                </a>
                <a href="#" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Engagement
                  </div>
                </a>
                <a href="#" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                      <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Security
                  </div>
                </a>
                <a href="#" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path>
                    </svg>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Integrations
                  </div>
                </a>
              </div>
              <div class="text-base leading-6">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                  View all products →
                </a>
              </div>
            </nav>
          </div>
        </div>
        <div class="py-6 px-5 space-y-6">
          <div class="grid grid-cols-2 gap-4">
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
              Pricing
            </a>
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
              Docs
            </a>
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
              Company
            </a>
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-600 transition ease-in-out duration-150">
              Resources
            </a>
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-600 transition ease-in-out duration-150">
              Blog
            </a>
            <a href="#" class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-600 transition ease-in-out duration-150">
              Contact Sales
            </a>
          </div>
          <div class="space-y-6">
            <span class="w-full flex rounded-md shadow-sm">
              <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-brand-darker focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                Sign up
              </a>
            </span>
            <p class="text-center text-base leading-6 font-medium text-gray-500">
              Existing customer?
              <a href="#" class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                Sign in
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if (is_front_page())
</div>
@endif