<div x-data="{ mobileMenuOpen: false, solutionsMenuOpen: false, moreMenuOpen: false, peopleMenuOpen: false }" class="z-50 relative bg-white sticky">
  <div class="relative z-10 shadow">
    <div class="flex justify-between items-center py-5 sm:py-4 md:justify-start md:space-x-10 container">
      <div>
        <a href="/" class="flex">
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-12 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
        <nav class="flex space-x-6">
          <a 
            @php $link = 658; @endphp
            href="@php echo get_the_permalink($link) @endphp" 
            class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            @php echo get_the_title($link); @endphp
          </a>
          <div class="relative">
            <button 
              type="button" 
              @click="solutionsMenuOpen = !solutionsMenuOpen; moreMenuOpen = false; peopleMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': solutionsMenuOpen, 'text-gray-500': !solutionsMenuOpen }" class="group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-gray-500">
              <span>Work</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': solutionsMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button 
              type="button" 
              @click="moreMenuOpen = !moreMenuOpen; solutionsMenuOpen = false; peopleMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': moreMenuOpen, 'text-gray-500': !moreMenuOpen }" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
              <span>Issues</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': moreMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button 
              type="button" 
              @click="peopleMenuOpen = !peopleMenuOpen; solutionsMenuOpen = false; moreMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': peopleMenuOpen, 'text-gray-500': !peopleMenuOpen }" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
              <span>People</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-400" :class="{ 'text-gray-600': peopleMenuOpen, 'text-gray-400': !solutionsMenuOpen }" x-bind-class="{ 'text-gray-600': peopleMenuOpen, 'text-gray-400': !solutionsMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <a 
            @php $link = 637; @endphp
            href="@php echo get_the_permalink($link) @endphp" 
            class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            @php echo get_the_title($link); @endphp
          </a>
          <a 
            @php $link = 656; @endphp
            href="@php echo get_the_permalink($link) @endphp" 
            class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            @php echo get_the_title($link); @endphp
          </a>
        </nav>
        <div class="flex items-center space-x-8">
          <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
            Sign in
          </a>
          <span class="inline-flex rounded-md shadow-sm">
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-brand-dark hover:bg-brand-darker focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
              Sign up
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>

  @include('header.work')
  @include('header.issues')
  @include('header.people')
  @include('header.mobile')

</div>