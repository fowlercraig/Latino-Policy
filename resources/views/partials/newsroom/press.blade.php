<div class="max-w-7xl mx-auto px-4 sm:px-6 pt-10 md:pt-20">
  <div class="relative bg-brand-darker">
    <div class="grid md:grid-cols-2 relative z-20">
      <div class="aspect-ratio aspect-ratio--6x4 bg-gray-400 relative">
        <div class="absolute inset-0 flex items-center justify-center text-white">
          No Image
        </div>
      </div>
      <div class="flex items-center md:px-xl order-first">
        <div class="space-y-4">
          <div class="text-2xl sm:text-3xl font-bold leading-7 sm:leading-9 tracking-tight text-white">Title goes here</div>
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
            title="Opens @php the_title() @endphp in the same window"  
            href="@php the_permalink() @endphp" 
            class="inline-block text-base text-white font-bold border-t-2 border-b-0 border-brand pt-1">Learn More</a> 
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>
