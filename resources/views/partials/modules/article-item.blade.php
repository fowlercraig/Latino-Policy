<div data-aos="fade">
  <div class="overflow-hidden flex flex-wrap items-center lg:block">
    <div class="bg-gray-700 relative mb-4 w-1/3 lg:w-full">
      <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
    </div>
    <div class="w-2/3 space-y-2 lg:w-full lg:space-y-2 pl-6 lg:pl-0">
      <h4 class="text-sm uppercase tracking-wide md:tracking-wider font-medium text-brand font-brand">
        Our Vision
      </h4>
      <h3 class="text-xl font-bold leading-6 text-gray-800 sm:text-xl sm:leading-7">
        <a 
        class="text-primary-darker" 
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
        class="py-2 border-t-2 border-brand inline-block font-brand uppercase text-sm tracking-wider font-semibold text-brand">Learn More</a>
    </div>
  </div>
</div>