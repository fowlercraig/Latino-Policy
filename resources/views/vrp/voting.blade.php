@php $page = 637; @endphp
<div class="bg-black">
  <div class="sm:grid grid-cols-2 items-center">
    <div class="aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--7x5 bg-gray-900 sm:order-last">
      @php $alt = get_post_meta($page, '_wp_attachment_image_alt', true); @endphp
      <img 
        class="object-cover w-full h-full object-top"
        alt="@php echo $alt @endphp"
        src="<?php echo get_the_post_thumbnail_url($page,'full'); ?>" />
    </div>
    <div class="space-y-4 p-4 sm:p-8">
      <h2 class="text-white font-display uppercase text-5xl lg:text-6xl leading-12 lg:leading-15">@php echo get_the_title($page); @endphp</h2>
      <div class="text-gray-300">@php echo get_the_excerpt($page) @endphp</div>
      <div>
        <a
          class="{{ $learnmore }}"
          title="Opens @php the_title() @endphp in the same window"  
          href="@php echo get_the_permalink($page) @endphp"  
        >Learn More</a>
      </div>
    </div>
  </div>
</div>