@php $donate = get_field('donate'); @endphp
<div class="relative overflow-hidden">
  <div class="py-20 bg-brand-lightest overflow-hidden relative">
    <div class="container grid grid-cols-1 md:grid-cols-5 gap-8">
      <div class="col-span-1 md:col-span-5">
        <div class="h-1 bg-red-600 w-32"></div>
      </div>
      <div class="w-full col-span-1 md:col-span-3 md:mb-0 sm:space-y-2">
        <p class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display uppercase leading-9 sm:leading-11 lg:leading-14 xl:leading-16 text-brand-darker">@php echo $donate['title'] @endphp</p>
        <div class="h-1 bg-transparent w-32"></div>
        <p>@php echo $donate['description'] @endphp</p>
      </div>
      <div class="w-full col-span-1 md:col-span-2">
        <div class="grid grid-cols-4 gap-2 mb-4">
          @php 
            $amounts = $donate['amounts'];
            $amounts = explode(',', $amounts);
            foreach($amounts as $amount):
          @endphp
          <div class="w-full">
            <div class="aspect-ratio aspect-ratio--16x9 relative">
              <a  
                class="absolute inset-0 flex items-center justify-center bg-white shadow rounded transform transition ease duration-200 hover:shadow-2xl hover:border-transparent hover:scale-105" 
                href="https://giving.ucla.edu/campaign/?amount=@php echo $amount @endphp&OrgType=S&OrgNum=800&fund=63922O"
                title="Opens link to Donate Page in the amout of $@php echo $amount @endphp">
              <span class="text-2xl sm:text-3xl md:text-2xl lg:text-3xl font-display text-brand-darker">$@php echo $amount @endphp</span>
              </a>
            </div>
          </div>
          @php endforeach; @endphp
        </div>
        <div class="md:text-right">
          <a
            target="_blank"
            href="https://giving.ucla.edu/campaign/?amount=10&OrgType=S&OrgNum=800&fund=63922O" 
            class="bg-brand-dark rounded px-5 py-3 text-white leading-none text-white font-medium">Make a Donation</a>
        </div>
      </div>
    </div>
  </div>
</div>