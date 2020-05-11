<div class="px-6 py-20 bg-light-grey">
  <div class="flex flex-wrap">
    <div class="w-full md:w-1/2 mb-4 md:mb-0">
      <div class="h-1 bg-red w-32 mb-3"></div>
      <h2 class="text-3xl md:text-5xl font-bold"><?php the_field('donate_headline','option'); ?></h2>
      <div>@php the_field('donate_description','option'); @endphp</div>
    </div>
    <div class="w-full md:w-1/2 flex flex-wrap -m-2">
      @php 
        $amounts = get_field('donate','option');
        $amounts = explode(',', $amounts);
        foreach($amounts as $amount):
      @endphp
      <div class="p-1 md:p-2 w-1/3">
        <div class="aspect-ratio aspect-ratio--16x9 relative">
          <a  
            class="absolute inset-0 flex items-center justify-center bg-white shadow rounded transition hover:shadow-2xl hover:border-transparent" 
            href="https://giving.ucla.edu/campaign/?amount=@php echo $amount @endphp&OrgType=S&OrgNum=800&fund=63922O"
            title="Opens link to Donate Page in the amout of $@php echo $amount @endphp"
            >
            <span class="font-bold text-3xl">$@php echo $amount @endphp</span>
          </a>
        </div>
      </div>
      @php 
        endforeach;
      @endphp
      
    </div>
  </div>
</div>