@php 
  $amounts = get_field('donate','option');
  $amounts = explode(',', $amounts);
@endphp

<div x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative z-50">  
  <button 
    type="button" 
    x-state:on="Item active" 
    x-state:off="Item inactive" 
    @click="flyoutMenuOpen = !flyoutMenuOpen" 
    :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-600': !flyoutMenuOpen }"     
    class="group inline-flex items-center space-x-2 border border-transparent text-base leading-6 font-medium rounded-sm text-white bg-brand hover:bg-brand-dark focus:outline-none focus:border-blue-900 focus:shadow-outline-blue active:bg-blue-700 transition ease duration-150">
    <span class="inline-flex items-center space-x-1 px-4 py-3 bg-brand-dark group-hover:bg-brand-darker transition ease duration-150">
      <span class="text-white font-brand uppercase tracking-wider">$@php echo $amounts[0]; @endphp</span>
      <svg 
        x-state-on="Item active" 
        x-state:on="Item active" 
        x-state-off="Item inactive" 
        x-state:off="Item inactive" 
        class="h-5 w-5 text-white group-focus:text-white-75 transition ease-in-out duration-150" 
        :class="{ 'text-white': flyoutMenuOpen, 'text-white-75': !flyoutMenuOpen }" 
        x-bind-class="{ 'text-white': flyoutMenuOpen, 'text-white-75': !flyoutMenuOpen }" fill="currentColor" viewBox="0 0 20 20" null="[object Object]">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </span>
    <span class="text-white font-brand uppercase tracking-wider px-4 py-3">Make a Donation</span>
  </button>

  <div 
    x-description="'Donation' flyout menu, show/hide based on flyout menu state." 
    x-show="flyoutMenuOpen" 
    x-transition:enter="transition ease-out duration-200" 
    x-transition:enter-start="opacity-0 translate-y-1" 
    x-transition:enter-end="opacity-100 translate-y-0" 
    x-transition:leave="transition ease-in duration-150" 
    x-transition:leave-start="opacity-100 translate-y-0" 
    x-transition:leave-end="opacity-0 translate-y-1" 
    class="absolute -ml-4 mt-3 transform px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" 
    style="display: none;">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs overflow-hidden">
        <div class="z-20 relative grid grid-cols-2 gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
          @foreach($amounts as $amount)
          @include('partials.nav.donatelink')
          @endforeach
        </div>
        <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
          <div class="flow-root">
            <a 
              href="https://giveto.ucla.edu/fund/latino-policy-politics-initiative/" 
              target="_blank"
              title="Opens UCLA Giving page in a new window"
              class="-m-3 p-3 flex items-center space-x-3 rounded-md text-sm leading-6 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">
              <i class="opacity-50" data-feather="info"></i>
              <span>More info on Donations</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>