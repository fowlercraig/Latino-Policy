<div 
  x-show="open" 
  :class="{ 'block': open, 'hidden': !open }"
  class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center z-50 hidden">
  
  <div @click="open = false;" x-show="open" x-description="Background overlay, show/hide based on modal state." x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
    <div class="absolute inset-0 bg-brand-darker opacity-50"></div>
  </div>

  <div 
    x-show="open" 
    x-description="Modal panel, show/hide based on modal state." 
    x-transition:enter="ease-out duration-300" 
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
    x-transition:leave="ease-in duration-200" 
    -transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
    class="relative bg-white rounded overflow-hidden shadow-xl transform transition-all sm:max-w-4xl sm:w-full " 
    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
    <div class="block absolute top-0 right-0 pt-4 pr-4">
      <button @click="open = false;" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150" aria-label="Close">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-gray-900 col-span-1 h-64 md:h-full hidden md:block">
        
      </div>
      <div class="sm:text-center md:max-w-2xl md:mx-auto lg:text-left grid-cols-1 md:col-span-2 px-4 pt-10 pb-4 sm:p-10">
        <h2 class="mt-1 text-4xl tracking-tight leading-10 font-bold text-brand sm:leading-none sm:text-6xl md:text-4xl lg:text-5xl">
          Stay informed, join
          <br class="hidden md:inline">
          <span class="text-brand-darker">the LPPI newsletter</span>
        </h2>
        <p class="mt-3 text-base text-gray-400 sm:mt-5 sm:text-xl md:text-lg lg:text-lg xl:text-xl">
          Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.
        </p>
        <div class="mt-5 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
          <p class="text-base font-medium text-gray-900">
            Sign up to get notified when it’s ready.
          </p>
          <form action="#" method="POST" class="mt-3 sm:flex">
            <input aria-label="Email" class="appearance-none block w-full px-3 py-3 border border-gray-300 text-base leading-6 rounded-md placeholder-gray-500 shadow-sm focus:outline-none focus:placeholder-gray-400 focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out sm:flex-1" placeholder="Enter your email">
            <button type="submit" class="mt-3 w-full px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-700 focus:outline-none focus:shadow-outline active:bg-gray-900 transition duration-150 ease-in-out sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
              Subscribe
            </button>
          </form>
          <p class="mt-3 text-sm leading-5 text-gray-500">
            We care about the protection of your data. Read our
            <a href="#" class="font-medium text-gray-900 underline">Privacy Policy</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>