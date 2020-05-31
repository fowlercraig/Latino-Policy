<div class="">
  <div class="container">
    <div class="flex justify-between">
      <nav class="flex space-x-3 py-2 justify-start font-medium text-sm order-last">
        <a href="/press">Press Archive</a>
        <a href="/research">Research Archive</a>
      </nav>
      <nav class="flex space-x-3 py-2 justify-end">
        <a href="<?php the_field('facebook','option'); ?>" title="Opens Facebook in a new window" class="text-gray-500 hover:text-gray-300">
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
          </svg>
        </a>
        <a href="<?php the_field('instagram','option'); ?>" title="Opens Instagram in a new window" class="ml-6 text-gray-500 hover:text-gray-300">
          <span class="sr-only">Instagram</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
          </svg>
        </a>
        <a href="<?php the_field('twitter','option'); ?>" title="Opens Twitter in a new window" class="ml-6 text-gray-500 hover:text-gray-300">
          <span class="sr-only">Twitter</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
          </svg>
        </a>
      </nav>
    </div>
    <div class="h-px bg-gray-100">
  </div>
</div>
<div @click.away="donateMenuOpen = false" x-data="{ mobileMenuOpen: false, workMenuOpen: false, issuesMenuOpen: false, peopleMenuOpen: false, donateMenuOpen: false }" class="z-50 relative bg-white sticky">
  <div class="relative z-10 border-b border-gray-100">
    <div class="flex justify-between items-center py-5 sm:py-4 xl:justify-start xl:space-x-10 container">
      <div>
        <a href="/" class="flex">
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 sm:h-12 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
        </a>
      </div>
      <div class="-mr-2 -my-2 xl:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <span class="sr-only">Open Mobile Menu</span>
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="hidden xl:flex-1 xl:flex xl:items-center xl:justify-between xl:space-x-12">
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
              @click="workMenuOpen = !workMenuOpen; issuesMenuOpen = false; peopleMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': workMenuOpen, 'text-gray-500': !workMenuOpen }" class="group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 text-gray-500">
              <span>Work</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-500" :class="{ 'text-gray-600': workMenuOpen, 'text-gray-500': !workMenuOpen }" x-bind-class="{ 'text-gray-600': workMenuOpen, 'text-gray-500': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button 
              type="button" 
              @click="issuesMenuOpen = !issuesMenuOpen; workMenuOpen = false; peopleMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': issuesMenuOpen, 'text-gray-500': !issuesMenuOpen }" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
              <span>Issues</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-500" :class="{ 'text-gray-600': issuesMenuOpen, 'text-gray-500': !workMenuOpen }" x-bind-class="{ 'text-gray-600': issuesMenuOpen, 'text-gray-500': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div class="relative">
            <button 
              type="button" 
              @click="peopleMenuOpen = !peopleMenuOpen; workMenuOpen = false; issuesMenuOpen = false" 
              x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': peopleMenuOpen, 'text-gray-500': !peopleMenuOpen }" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
              <span>People</span>
              <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150 text-gray-500" :class="{ 'text-gray-600': peopleMenuOpen, 'text-gray-500': !workMenuOpen }" x-bind-class="{ 'text-gray-600': peopleMenuOpen, 'text-gray-500': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
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
          <div class="relative">
            <button 
              @click="donateMenuOpen = !donateMenuOpen" x-state:on="Item active" x-state:off="Item inactive"
              :class="{ 'bg-brand-darker': donateMenuOpen, 'bg-brand-dark': !donateMenuOpen }"
              class="inline-flex rounded shadow-sm overflow-hidden bg-brand-dark hover:bg-brand-darker font-medium transition ease duration-200">
              <span href="#" class="px-4 py-2 leading-6 text-white flex items-center space-x-1">
                <span class="text-white">Make a Donation</span>
                <div class="block pt-px transition ease duration-400" :class="{ 'pt-1': donateMenuOpen, 'pt-px': !donateMenuOpen }" >
                  <i height="16" width="16" data-feather="chevron-down"></i>
                </div>
              </span>
            </button>
            @include('header.donate')
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('header.work')
  @include('header.issues')
  @include('header.people')
  @include('header.mobile')

</div>