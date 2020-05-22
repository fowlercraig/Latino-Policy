<div class="relative overflow-hidden pt-20">
  <div class="py-20 bg-brand-lightest overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-wrap justify-between items-center relative z-10">
      <div class="w-full md:w-3/5 mb-4 md:mb-0 space-y-4">
        <div class="h-1 bg-red-600 w-32"></div>
        <div class="h-1 bg-transparent w-32"></div>
        <h2 class="text-5xl md:text-7xl font-display uppercase leading-11 md:leading-16 text-brand-darker"><?php the_field('donate_headline','option'); ?></h2>
        <div class="text-gray-500 pr-lg">@php the_field('donate_description','option'); @endphp</div>
      </div>
      <div class="w-full md:w-2/5">
        <div class="grid grid-cols-4 gap-2 mb-4">
          @php 
            $amounts = get_field('donate','option');
            $amounts = explode(',', $amounts);
            foreach($amounts as $amount):
          @endphp
          <div class="w-full">
            <div class="aspect-ratio aspect-ratio--16x9 relative">
              <a  
                class="absolute inset-0 flex items-center justify-center bg-white shadow rounded transition ease duration-200 hover:shadow-2xl hover:border-transparent" 
                href="https://giving.ucla.edu/campaign/?amount=@php echo $amount @endphp&OrgType=S&OrgNum=800&fund=63922O"
                title="Opens link to Donate Page in the amout of $@php echo $amount @endphp">
              <span class="font-bold text-3xl font-display text-brand-darker">$@php echo $amount @endphp</span>
              </a>
            </div>
          </div>
          @php endforeach; @endphp
        </div>
        <div class="md:text-right">
          <a
            target="_blank"
            href="https://giving.ucla.edu/campaign/?amount=10&OrgType=S&OrgNum=800&fund=63922O" 
            class="bg-brand-dark rounded px-5 py-3 text-white leading-none font-brand uppercase tracking-wider text-sm font-medium">Make a Donation</a>
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="opacity-75" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
    <div class="absolute top-0 inset-y-0 right-0 pointer-events-none z-0">
      <img class="object-cover h-full" src="@asset('images/donate.svg')">
    </div>
  </div>
</div>