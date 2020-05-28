<div x-data="{ open: true }" x-show="open" class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center z-50">
  
  <div x-show="open" x-description="Background overlay, show/hide based on modal state." x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
    <div class="absolute inset-0 bg-black-50"></div>
  </div>

  <div 
    x-show="open" 
    x-description="Modal panel, show/hide based on modal state." 
    x-transition:enter="ease-out duration-300" 
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0" 
    x-transition:enter-end="opacity-100 translate-y-0" 
    x-transition:leave="ease-in duration-200" 
    x-transition:leave-start="opacity-100 translate-y-0" 
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0" 
    class="relative bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-3xl sm:w-full sm:p-10" 
    role="dialog" 
    aria-modal="true" 
    aria-labelledby="modal-headline"
  >
    <div class="block absolute top-0 right-0 pt-4 pr-4">
      <button @click="open = false;" type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600 transition ease-in-out duration-150" aria-label="Close">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div class="bg-white">
      <div class="py-12 px-4 sm:px-4 lg:py-8 lg:px-8">
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
          Keep up with the Latino Policy & Politics Initiative
          <br class="hidden sm:inline" />
          <span class="text-gray-400">Sign up for our newsletter.</span>
        </h2>
        @include('partials.mailchimp')
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0 w-1/2">
      <img alt="Pattern"  src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>