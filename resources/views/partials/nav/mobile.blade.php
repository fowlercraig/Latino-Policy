<div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-20  top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6 sm:space-y-8 sm:pb-8">
          <div class="flex items-center justify-end">
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
                <a href="/about" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    About
                  </div>
                </a>
                <a href="/work" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    Work
                  </div>
                </a>
                <a href="/issues" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                      <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    Issues
                  </div>
                </a>
                <a href="/voting-rights-project/" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    Voting Rights Project
                  </div>
                </a>
                <a href="/people" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    People
                  </div>
                </a>
                <a href="/newsroom" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brand-darker text-white sm:h-12 sm:w-12">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                  </div>
                  <div class="text-lg leading-6 font-medium text-gray-900">
                    Newsroom
                  </div>
                </a>
              </div>
            </nav>
          </div>
        </div>
        <div class="py-6 px-5 space-y-6">
          <div class="grid grid-cols-2 gap-4">
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(14); @endphp"  title="Opens @php echo get_the_title(14); @endphp in the same window">@php echo get_the_title(14); @endphp</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(14); @endphp"  title="Opens Archive in the same window">Archive</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(16); @endphp"  title="Opens @php echo get_the_title(16); @endphp in the same window">@php echo get_the_title(16); @endphp</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(38); @endphp"  title="Opens @php echo get_the_title(38); @endphp in the same window">@php echo get_the_title(38); @endphp</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="/research" title="Opens @php echo get_the_title(282); @endphp in same window">@php echo get_the_title(282); @endphp</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="/press" title="Opens @php echo get_the_title(284); @endphp in same window">@php echo get_the_title(284); @endphp</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(14); @endphp"  title="Opens Careers in same window">Careers</a>
            <a class="rounded-md text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150" href="@php echo get_permalink(14); @endphp"  title="Opens Campus Resources in same window">Campus Resources</a>
          </div>
        </div>
      </div>
    </div>
  </div>