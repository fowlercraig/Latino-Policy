@php $image = get_field('press_image'); @endphp
@php $link  = get_field('press_link'); @endphp
<div class="container">
  <section id="press-release" class="bg-brand-darker relative">
    <div class="sm:grid grid-cols-5 relative z-10">
      <div class="col-span-3 aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--16x9 bg-gray-900 sm:order-last relative">
        <div class="absolute inset-0">
          @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'object-cover transition ease duration-300 w-full h-full' ) ); @endphp
        </div>
      </div>
      <div class="col-span-2 space-y-4 p-8">
        <div class="flex flex-col h-full">
          <h2 class="font-display uppercase text-3xl sm:text-3xl lg:text-7xl  leading-7 sm:leading-9 font-bold text-white sm:text-4xl sm:leading-10 lg:leading-16 lg:tracking-tight">@php the_field('press_title') @endphp</h2>
          <div class="text-gray-300">@php the_field('press_description') @endphp</div>
          <div class="flex-grow h-2"></div>
          <div>
            <a
              class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white"
              title="Opens @php echo $link['title'] @endphp in the same window"  
              href="@php echo $link['url'] @endphp"  
            >@php echo $link['title'] @endphp</a>
          </div>
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </section>
</div>