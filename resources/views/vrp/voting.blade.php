@php $page = 637; @endphp
<div class="bg-black" data-aos="fade-up">
  <div class="sm:grid grid-cols-2 items-center relative z-10">
    <div class="overflow-hidden aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--7x5 bg-gray-900 sm:order-last relative">
      <div class="absolute inset-x-0">
        @php $alt = get_post_meta($page, '_wp_attachment_image_alt', true); @endphp
        <img 
          class="object-cover w-full h-full object-top"
          alt="@php echo $alt @endphp"
          src="@php echo wp_get_attachment_image( get_field('widget_image', $page), 'full' ); @endphp" />
        </div>
    </div>
    <div class="space-y-4 p-4 sm:p-8">
      <h2 class="text-white text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display uppercase leading-9 sm:leading-11 lg:leading-14 xl:leading-16 ">@php echo get_the_title($page); @endphp</h2>
      <div class="border-t-2 border-red-500 w-28"></div>
      <div class="text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
        @php echo get_the_excerpt($page) @endphp
      </div>
      <div>
        <a
          title="Opens @php the_title() @endphp in the same window"  
          href="@php echo get_the_permalink($page) @endphp"  
          class="inline-block font-bold border-t-2 border-b-0 border-red-500 pt-1 text-white relative group">
          <span class="border-t-2 -mt-px border-white block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
          Learn more
        </a>
      </div>
    </div>
  </div>
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</div>