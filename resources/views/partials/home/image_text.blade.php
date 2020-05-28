<div class="h-2"></div>
<div class="bg-brand-darker relative pb-64 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative pt-20 z-30" data-aos="fade">
    @if(get_sub_field('align'))
    <div class="opacity-25 absolute top-0 right-0">
      <img 
        alt="Pattern" 
        src="@asset('images/Pattern.png')" 
        srcset="@asset('images/Pattern.png') 1x, 
          @asset('images/Pattern@2x.png') 2x, 
          @asset('images/Pattern@3x.png') 3x">
    </div>
    @endif
    <div class="flex flex-wrap md:items-center lg:-mx-lg space-y-5 lg:space-y-0 relative z-10">
      <div class="w-full lg:w-3/5 w-8/12 @if(!get_sub_field('align')): lg:order-last @endif lg:px-lg">
        @php $image = get_sub_field('image') @endphp
        @php $size = 'large'; @endphp
        @if( $image )
          <div class="relative shadow-xl">
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
      <div class="w-full lg:w-2/5 w-4/12 lg:px-lg space-y-4 lg:space-y-4">
        <h4 class="text-sm uppercase tracking-wide md:tracking-wider font-medium text-brand font-brand font-semibold">
          @if (get_sub_field('subtitle'))
          <span class="bg-white p-2">@php the_sub_field('subtitle') @endphp</span>
          @else
          <span class="bg-white p-2">Our Vision</span>
          @endif
        </h4>
        <h3 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
          @if (get_sub_field('title'))
          @php the_sub_field('title') @endphp
          @else
          There is no American Agenda without the Latino Agenda
          @endif
        </h3>
        <div class="text-white-75">
          @if (get_sub_field('description'))
          @php the_sub_field('description') @endphp
          @else
          Maecenas augue metus, tempor quis nibh egestas, accumsan posuere magna. 
          Ut ornare, justo ut rhoncus ullamcorper, ipsum lorem fermentum nisi, vel 
          tincidunt leo turpis at mauris. Etiam non magna ante. 
          @endif
        </div>
        <a 
          href="/about"
          target="Opens About page in same window"
          class="inline-block text-base font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</a> 
      </div>
    </div>
  </div>
  <div class="opacity-50 absolute top-0 left-0 pointer-events-none z-0">
    <img alt="Pattern"  src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
  <div class="opacity-50 absolute bottom-0 right-0 pointer-events-none z-0">
    <img alt="Pattern"  src="@asset('images/Pattern_reversed.png')" srcset="@asset('images/Pattern_reversed.png') 1x, @asset('images/Pattern_reversed@2x.png') 2x, @asset('images/Pattern_reversed@3x.png') 3x">
  </div>
  <div class="opacity-75 absolute inset-0 pointer-events-none z-0">
    <img alt="Pattern"  src="@asset('images/Group-3.png')" srcset="@asset('images/Pattern_reversed.png') 1x, @asset('images/Group-3@2x.png') 2x, @asset('images/Group-3@3x.png') 3x">
  </div>
</div>