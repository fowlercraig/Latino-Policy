<button @click="donateMenu = !donateMenu" class="p-2 px-4 text-sm lg:text-base bg-brand border border-brand hover:bg-brand-dark transition ease duration-300 text-white rounded font-medium">Make a Donation</button>

<div 
  x-show="donateMenu" x-cloak 
  x-description="Donate Module, show/hide based on modal state." 
  x-transition:enter="transform transition ease duration-300" 
  x-transition:enter-start="translate-y-1 opacity-0" 
  x-transition:enter-end="translate-y-0 opacity-100" 
  x-transition:leave="transform transition ease duration-300" 
  x-transition:leave-start="translate-0 opacity-100" 
  x-transition:leave-end="translate-y-1 opacity-0" 
  aria-hidden="true"
  class="absolute right-0 top-full z-20 text-left">
  <div class="bg-white rounded shadow-xl mt-1 space-y-4 pt-4 overflow-hidden">
    <div class="px-4">
      <header class="sr-only">Make a Donation</header>
      @set($numbers, array(10, 25, 50, 100, 250, 500, 750, 1000))
      <ul class="grid grid-cols-2 gap-2">
        @foreach($numbers as $number)
        @set($url,'https://giving.ucla.edu/campaign/?amount='.$number.'&OrgType=S&OrgNum=800&fund=63922O')
          <li class="tracking-tight text-brand-dark font-bold text-xl font-primary-a uppercase">
            <a title="Donate ${{$number}}" target="_blank" href="{!!$url!!}" class="p-2 md:px-8 md:py-3 transition ease duration-300 bg-gray-100 hover:bg-gray-100 block rounded">
              <span class="block text-center">${{$number}}</span>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
    <a 
      href="https://giveto.ucla.edu/fund/latino-policy-politics-initiative/" 
      target="_blank" 
      class="p-4 bg-gray-100 text-gray-500 text-sm font-medium leading-snug flex items-center space-x-2">
      
      <div class="h-10 w-10 rounded bg-brand-dark flex-none text-white flex items-center justify-center">
        <i data-feather="help-circle"></i>
      </div>
      <p>Learn more about out how LPPI utilizes your donation.</p>

    </a>
  </div>
</div>