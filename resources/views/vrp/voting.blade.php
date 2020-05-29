@php $vote = 637; @endphp
<div class="bg-black">
  <div class="sm:grid grid-cols-2 items-center">
    <div class="aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--7x5 bg-gray-900 sm:order-last"></div>
    <div class="space-y-4 p-8">
      <h2 class="text-white font-display uppercase text-5xl lg:text-6xl leading-12 lg:leading-15">@php echo get_the_title($vote); @endphp</h2>
      <div class="text-gray-300">@php echo get_the_excerpt($vote) @endphp</div>
      <div>
        <a
          class="{{ $learnmore }}"
          title="Opens @php the_title() @endphp in the same window"  
          href="@php echo get_the_permalink($vote) @endphp"  
        >Learn More</a>
      </div>
    </div>
  </div>
</div>