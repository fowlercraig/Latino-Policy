<div class="max-w-7xl mx-auto px-4 sm:px-6 relative pt-20">
  @if(get_sub_field('align'))
  <div class="opacity-25 absolute top-0 right-0">
    <img 
      src="@asset('images/Pattern.png')" 
      srcset="@asset('images/Pattern.png') 1x, 
        @asset('images/Pattern@2x.png') 2x, 
        @asset('images/Pattern@3x.png') 3x">
  </div>
  @endif
  <div class="flex flex-wrap md:items-center md:-mx-lg space-y-5 lg:space-y-0 relative z-10">
    <div class="w-full lg:w-3/5 w-8/12 @if(!get_sub_field('align')): lg:order-last @endif px-lg"  data-aos="fade-up">
      @php $image = get_sub_field('image') @endphp
      @php $size = 'large'; @endphp
      @if( $image )
        <div class="relative">
          @php echo wp_get_attachment_image( $image, $size ); @endphp
          @if (wp_get_attachment_caption($image))
            <span class="pt-2 pr-4 bg-white text-xs inline-block text-gray-600 absolute bottom-0">
              @php echo wp_get_attachment_caption($image); @endphp
            </span>
          @endif
        </div>
      @else
      <div class="aspect-ratio aspect-ratio--6x4 bg-gray-400 relative">
        <div class="absolute inset-0 flex items-center justify-center text-white">
          No Image
        </div>
      </div>
      @endif
    </div>
    <div class="w-full lg:w-2/5 w-4/12 px-lg space-y-4 lg:space-y-4">
      @if (get_sub_field('subtitle'))
      <h4 class="text-sm uppercase tracking-wide md:tracking-wider font-medium text-brand font-brand font-semibold -ml-2">
        <span class="bg-white p-2">@php the_sub_field('subtitle') @endphp</span>
      </h4>
      @endif
      <h3 class="text-3xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
        @if (get_sub_field('title'))
        @php the_sub_field('title') @endphp
        @else
        There is no American Agenda without the Latino Agenda
        @endif
      </h3>
      <div class="text-gray-600">
        @if (get_sub_field('description'))
        @php the_sub_field('description') @endphp
        @else
        Maecenas augue metus, tempor quis nibh egestas, accumsan posuere magna. 
        Ut ornare, justo ut rhoncus ullamcorper, ipsum lorem fermentum nisi, vel 
        tincidunt leo turpis at mauris. Etiam non magna ante. 
        @endif
      </div>
      @if (get_sub_field('page_link'))
      <a
        target="Opens <?php the_sub_field('page_link'); ?> in the same window" 
        href="<?php the_sub_field('page_link'); ?>" 
        class="inline-block text-base text-brand font-bold border-b-2 border-brand pb-1">Learn More</a>
      @endif
    </div>
  </div>
</div>