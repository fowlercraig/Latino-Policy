<div 
  x-description="donate menu, show/hide based on donate menu state." 
  x-show="donateMenuOpen" 
  x-transition:enter="transition ease-out duration-200" 
  x-transition:enter-start="opacity-0 translate-y-1" 
  x-transition:enter-end="opacity-100 translate-y-0" 
  x-transition:leave="trahttps://giveto.ucla.edu/fund/latino-policy-politics-initiative/nsition ease-in duration-150" 
  x-transition:leave-start="opacity-100 translate-y-0" 
  x-transition:leave-end="opacity-0 translate-y-1" 
  class="absolute right-0 transform mt-3 px-2 w-screen max-w-xs sm:px-0">
  <div class="rounded-lg shadow-lg">
    <div class="rounded-lg shadow-xs overflow-hidden">
      <div class="z-20 relative grid gap-6 bg-white px-4 py-4 sm:gap-8 sm:p-8">
        <div class="grid grid-cols-2 gap-2">
          @php $donate = get_field('donate', 754); @endphp
          @php 
            $amounts = $donate['amounts'];
            $amounts = explode(',', $amounts);
            foreach($amounts as $amount):
          @endphp
          <a 
            href="https://giving.ucla.edu/campaign/?amount=@php echo $amount @endphp&OrgType=S&OrgNum=800&fund=63922O" 
            class="p-3 block space-y-1 rounded-md bg-gray-100 hover:bg-brand-lightest transition ease-in-out duration-150 text-center">
            <p class="text-base leading-6 font-medium text-brand-dark">
              $@php echo $amount @endphp
            </p>
          </a>
          @php endforeach; @endphp
        </div>
      </div>
      <div class="py-4 px-8 bg-gray-50 hover:bg-brand-lightest transition ease duration-300">
        <a 
          href="https://giveto.ucla.edu/fund/latino-policy-politics-initiative/" 
          class="rounded-md transition ease-in-out duration-150 flex items-center space-x-4 text-gray-500">
          <div class="text-brand-darker flex-0 order-first">
            <i height="40" width="40" class="block mt-px" data-feather="help-circle"></i>
          </div>
          <p class="text-sm leading-5 text-right">
            Learn more about out how <br>LPPI utilizes your donation.
          </p>
        </a>
      </div>
    </div>
  </div>
</div>