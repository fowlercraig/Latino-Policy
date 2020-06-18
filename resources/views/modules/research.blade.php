@php $page = 156; @endphp
<section id="research" class="bg-black" data-aos="fade-up">
  <div class="sm:grid grid-cols-2 items-center">
    <div class="aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--7x5 bg-gray-900 sm:order-last relative">
      <div class="absolute inset-0">
        <img 
          class="object-cover w-full h-full object-top"
          alt="@php echo $alt @endphp"
          src="<?php echo get_the_post_thumbnail_url($page,'full'); ?>" />
      </div>
    </div>
    <div class="space-y-4 p-8">
      <h2 class="text-white font-display uppercase text-5xl lg:text-6xl leading-12 lg:leading-15">@php echo get_the_title($page); @endphp</h2>
      <div class="text-gray-300">@php echo get_the_excerpt($page) @endphp</div>
      <div>
        <a
          title="Opens Research Library in same window"
          href="/research"  
          class="inline-block font-bold border-t-2 border-b-0 border-red-500 pt-1 text-white relative group sm:text-xl lg:text-lg xl:text-xl">
          <span class="border-t-2 -mt-px border-red-800 block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in z-10"></span>
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>