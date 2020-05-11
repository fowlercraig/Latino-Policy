<div class="w-1/3 px-md">
  <div class="shadow-md rounded overflow-hidden">
    <div class="aspect-ratio aspect-ratio--8x5 bg-gray-700"></div>
    <div class="bg-white p-8 space-y-2">
      <h4 class="text-sm uppercase tracking-wide md:tracking-wider font-semibold text-blue-500">
        Our Vision
      </h4>
      <h3 class="text-xl font-bold leading-6 text-gray-800 sm:text-xl sm:leading-7">
        <a 
        title="Opens @php the_title() @endphp in the same window" 
        href="@php the_permalink() @endphp">
          @php the_title() @endphp
        </a>
      </h3>
      <div class="text-gray-500 text-sm">
        @php echo get_the_excerpt() @endphp
      </div>
      <div class="h-2"></div>
      <a 
        title="Opens @php the_title() @endphp in the same window" 
        href="@php the_permalink() @endphp" 
        class="py-1 border-t-2 border-blue-500 text-blue-800 inline-block uppercase text-sm tracking-wider font-semibold">Learn More</a>
    </div>
  </div>
</div>