@php $vote = 586; @endphp
<div class="pt-20" data-aos="fade">
  <div class="max-w-7xl mx-auto sm:px-6">
    <div class="lg:grid grid-cols-2 gap-6 items-center justify-start bg-black">
      <div class="p-6 lg:p-10 space-y-4">
        <div>
          <div class="w-32 border-t-2 border-red-600 mb-3"></div>
          <h2 class="text-white font-display uppercase text-6xl leading-15">@php echo get_the_title($vote); @endphp</h2>
        </div>
        <div class="text-white-75">
          @php echo get_the_excerpt($vote) @endphp
        </div>
        <a
        title="Opens @php the_title() @endphp in the same window"  
        href="@php echo get_the_permalink($vote) @endphp" 
        class="inline-block text-base text-white font-bold border-t-2 border-b-0 border-red-600 pt-1">Learn More</a> 
      </div>
      <div class="w-full">
        <img src="<?php echo get_the_post_thumbnail_url($vote,'full'); ?>" />
      </div>
    </div>
  </div>
</div>