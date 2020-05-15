@php $vote = 586; @endphp
<div class="pt-20" data-aos="fade">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-wrap items-center justify-start bg-black">
      <div class="p-10 space-y-4 w-1/2">
        <div>
          <div class="w-32 border-t-2 border-red-600 mb-3"></div>
          <h2 class="text-white font-display uppercase text-6xl leading-15">@php echo get_the_title($vote); @endphp</h2>
        </div>
        <div class="text-white-75">
          @php echo get_the_excerpt($vote) @endphp
        </div>
        <a href="#" class="pt-2 border-t-2 border-red-600 inline-block font-brand text-white uppercase text-sm tracking-wider font-semibold">Learn More</a>
      </div>
      <div class="w-1/2">
        <img src="<?php echo get_the_post_thumbnail_url($vote,'full'); ?>" />
      </div>
    </div>
  </div>
</div>