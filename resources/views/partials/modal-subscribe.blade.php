<div 
  x-show="subscribe"
  x-description="Flyout menu, show/hide based on flyout menu state."
  x-transition:enter="ease-out duration-300"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="ease-in duration-200"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 bg-black bg-opacity-25 flex items-center justify-center z-50">
  <div class="bg-white w-full max-w-4xl rounded shadow-xl relative flex">
    <button @click="subscribe = false" class="p-4 absolute right-0">
      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
    <div class="w-1/3 bg-brand flex-none overflow-hidden">
      @set($image, get_field('image','options'))
      @image($image, 'medium', ['alt' => 'LPPI Subscribe', 'class' => 'h-full w-full object-cover m-0'])
    </div>
    <div class="content p-16 w-full">
      <h1>@option('headline')</h1>
      @include('components.subscribe-form')
      <p class="text-sm text-gray-500">
        We care about the protection of your data. Read our
        <a href="http://www.ucla.edu/terms-of-use/" class="font-medium text-gray-900 underline">Terms of Use</a>.
      </p>
    </div>
  </div>
</div>