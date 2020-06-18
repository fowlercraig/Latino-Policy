@php 
  if (is_front_page()) {
    $textColor = 'text-gray-200';
    $textHover = 'text-white';
    $borderColor = 'border-white-25';
  } else {
    $textColor = 'text-gray-500';
    $textHover = 'text-gray-900';
    $borderColor = 'border-gray-100';
  } 
@endphp
<div class="bg-white">
  @include('header.subscribe')
</div>
<div 
  id="header" 
  @click.away="workMenuOpen = false, issuesMenuOpen = false, vrpMenuOpen = false, peopleMenuOpen = false, donateMenuOpen = false" 
  x-data="{ mobileMenuOpen: false, workMenuOpen: false, issuesMenuOpen: false, vrpMenuOpen: false, peopleMenuOpen: false, donateMenuOpen: false }" 
  @if (is_front_page())
  class="z-40 fixed inset-x-0 top-0 transition duration-300 ease">
  @else
  class="z-40 relative bg-white sticky">
  @endif
  <div class="relative z-10">
    <div class="flex justify-between items-center py-5 sm:py-4 w-full container">
      <div>
        <a href="/" class="flex">
          @if (is_front_page())
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')">
          @else
          <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
          @endif
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md @php echo $textColor @endphp hover:@php echo $textColor @endphp hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:@php echo $textColor @endphp transition duration-150 ease-in-out">
          <span class="sr-only">Open Mobile Menu</span>
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="hidden md:flex lg:items-center lg:justify-between lg:space-x-12">
        <div class="text-right">
          <div class="mb-2 space-x-2 @php echo $textColor @endphp">
            <a class="text-sm font-medium" href="/press-archive">Press Archive</a>
            <a class="text-sm font-medium" href="/research">Research Library</a>
            <span class="opacity-50">|</span>
            <button @click="open = true;" class="text-sm font-medium">Subscribe</button>
          </div>
          <div class="relative">
            <button 
              @click="donateMenuOpen = !donateMenuOpen" x-state:on="Item active" x-state:off="Item inactive"
              :class="{ 'bg-brand-darker': donateMenuOpen, 'bg-brand': !donateMenuOpen }"
              class="inline-flex rounded shadow-sm overflow-hidden bg-brand hover:bg-brand-darker font-medium transition ease duration-200">
              <span class="px-4 py-2 leading-6 text-white flex items-center space-x-1">
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
  <div class="container py-4 border-t @php echo $borderColor; @endphp hidden md:flex justify-between items-center">
    <nav class="flex space-x-3 xl:space-x-6 font-brand uppercase tracking-wider text-sm lg:text-base">
      <a 
        @php $link = 658; @endphp
        href="@php echo get_the_permalink($link) @endphp" 
        class="leading-6 font-medium @php echo $textColor @endphp hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150">
        @php echo get_the_title($link); @endphp
      </a>
      <div class="relative">
        <button 
          type="button" 
          @click="workMenuOpen = !workMenuOpen; issuesMenuOpen = false; peopleMenuOpen = false; vrpMenuOpen = false" 
          x-state:on="Item active" x-state:off="Item inactive" :class="{ '@php echo $textHover; @endphp': workMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" class="group inline-flex items-center space-x-2 leading-6 font-medium hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150 @php echo $textColor @endphp">
          <span class="uppercase">Work</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:@php echo $textColor @endphp group-focus:@php echo $textColor @endphp transition ease-in-out duration-150 @php echo $textColor @endphp" :class="{ 'text-gray-600': workMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" x-bind-class="{ 'text-gray-600': workMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="relative">
        <button 
          type="button" 
          @click="issuesMenuOpen = !issuesMenuOpen; workMenuOpen = false; peopleMenuOpen = false; vrpMenuOpen = false" 
          x-state:on="Item active" x-state:off="Item inactive" :class="{ '@php echo $textHover; @endphp': issuesMenuOpen, '@php echo $textColor @endphp': !issuesMenuOpen }" class="@php echo $textColor @endphp group inline-flex items-center space-x-2 leading-6 font-medium hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150">
          <span class="uppercase">Issues</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:@php echo $textColor @endphp group-focus:@php echo $textColor @endphp transition ease-in-out duration-150 @php echo $textColor @endphp" :class="{ 'text-gray-600': issuesMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" x-bind-class="{ 'text-gray-600': issuesMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="relative">
        <button 
          type="button" 
          @click="vrpMenuOpen = !vrpMenuOpen; workMenuOpen = false; issuesMenuOpen = false; peopleMenuOpen = false" 
          x-state:on="Item active" x-state:off="Item inactive" :class="{ '@php echo $textHover; @endphp': vrpMenuOpen, '@php echo $textColor @endphp': !vrpMenuOpen }" class="@php echo $textColor @endphp group inline-flex items-center space-x-2 leading-6 font-medium hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150">
          <span class="uppercase">Voting Rights Project</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:@php echo $textColor @endphp group-focus:@php echo $textColor @endphp transition ease-in-out duration-150 @php echo $textColor @endphp" :class="{ 'text-gray-600': vrpMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" x-bind-class="{ 'text-gray-600': peopleMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="relative">
        <button 
          type="button" 
          @click="peopleMenuOpen = !peopleMenuOpen; workMenuOpen = false; issuesMenuOpen = false; vrpMenuOpen = false;" 
          x-state:on="Item active" x-state:off="Item inactive" :class="{ '@php echo $textHover; @endphp': peopleMenuOpen, '@php echo $textColor @endphp': !peopleMenuOpen }" class="@php echo $textColor @endphp group inline-flex items-center space-x-2 leading-6 font-medium hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150">
          <span class="uppercase">People</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive" class="h-5 w-5 group-hover:@php echo $textColor @endphp group-focus:@php echo $textColor @endphp transition ease-in-out duration-150 @php echo $textColor @endphp" :class="{ 'text-gray-600': peopleMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" x-bind-class="{ 'text-gray-600': peopleMenuOpen, '@php echo $textColor @endphp': !workMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <a 
        @php $link = 656; @endphp
        href="@php echo get_the_permalink($link) @endphp" 
        class="leading-6 font-medium @php echo $textColor @endphp hover:@php echo $textHover; @endphp focus:outline-none focus:@php echo $textHover; @endphp transition ease-in-out duration-150">
        @php echo get_the_title($link); @endphp
      </a>
    </nav>
    <nav class="flex space-x-3 justify-between md:justify-end items-center">
      @php $url = get_field('facebook','option') @endphp
      <a href="<?php echo $url['url']; ?>" title="Opens Facebook in a new window" class="@php echo $textColor @endphp hover:text-gray-300 hidden md:block">
        <span class="sr-only">Facebook</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
        </svg>
      </a>
      @php $url = get_field('instagram','option') @endphp
      <a href="<?php echo $url['url']; ?>" title="Opens Instagram in a new window" class="ml-6 @php echo $textColor @endphp hover:text-gray-300 hidden md:block">
        <span class="sr-only">Instagram</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
        </svg>
      </a>
      @php $url = get_field('twitter','option') @endphp
      <a href="<?php echo $url['url']; ?>" title="Opens Twitter in a new window" class="ml-6 @php echo $textColor @endphp hover:text-gray-300 hidden md:block">
        <span class="sr-only">Twitter</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
        </svg>
      </a>
    </nav>
  </div>

  @include('header.work')
  @include('header.issues')
  @include('header.vrp')
  @include('header.people')
  @include('header.mobile')

</div>