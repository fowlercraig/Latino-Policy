@php $vote = 282; @endphp
<a
  href="/research"
  title="Opens Research Library in the same window"  
  class="block pt-20" data-aos="fade">
  <div class="max-w-7xl mx-auto sm:px-6">
    <div class="lg:grid grid-cols-3 gap-6 items-center justify-start bg-black">
      <div class="p-6 lg:p-10 space-y-4 col-span-2">
        <div>
          <div class="w-32 border-t-2 border-red-600 mb-3"></div>
          <h2 class="text-white font-display uppercase text-6xl leading-15">@php echo get_the_title($vote); @endphp</h2>
        </div>
        <div class="text-white-75">
          @php echo get_the_excerpt($vote) @endphp
        </div>
        <span
          class="inline-block text-base font-bold border-t-2 border-b-0 border-red-500 pt-1 text-white">Learn More</span>
      </div>
      <div class="w-full">
        <?php
          $alt = get_post_meta($vote, '_wp_attachment_image_alt', true);
          //if(count($alt)) echo $alt;
        ?>
        <img 
          alt="@php echo $alt @endphp"
          src="<?php echo get_the_post_thumbnail_url($vote,'full'); ?>" />
      </div>
    </div>
  </div>
</a>