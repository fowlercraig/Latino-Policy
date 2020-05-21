<div data-aos="fade">
  <div class="overflow-hidden flex flex-wrap items-center lg:block">
    <div class="bg-gray-700 relative mb-4 w-1/3 lg:w-full flex h-64 items-end">
      <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
    </div>
    <div class="w-2/3 space-y-2 lg:w-full lg:space-y-2 pl-6 lg:pl-0">
      <h4 class="text-base text-brand font-medium">
        @php
          $categories = get_the_category();
          if ( ! empty( $categories ) ) {
            echo esc_html( $categories[0]->name );   
          }
        @endphp
      </h4>
      <h3 class="text-xl font-extrabold leading-6 sm:text-xl sm:leading-6">
        <a 
        class="text-primary-darker" 
        title="Opens @php the_title() @endphp in the same window" 
        href="@php the_permalink() @endphp">
          @php the_title() @endphp
        </a>
      </h3>
      <div class="h-2"></div>
      <a
        title="Opens @php the_title() @endphp in the same window"  
        href="@php the_permalink() @endphp" 
        class="text-base text-brand font-bold border-t-2 border-b-0 border-brand pt-1">Learn More</a> 
    </div>
  </div>
</div>