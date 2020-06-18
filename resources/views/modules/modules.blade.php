@php $items = get_field('modules') @endphp
@if ($items)
<section id="modules">
  <div class="space-y-20 lg:space-y-16">
    @php $i = 0; @endphp
    @foreach ($items as $item)
    <div data-aos="fade-up" class="relative">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
        <div class="col-span-3 @if ($i % 2 == 0): lg:order-last @endif">
          @php $image = $item['image']; $size = 'large'; @endphp
          @if ($item['link'])
          <a href="@php echo $item['link']['url'] @endphp" class="block transition duration-300 ease hover:shadow-xl">
            <div class="bg-gray-100">
              @if (wp_get_attachment_caption($image))
              <span class="pt-2 pr-4 bg-white text-xs font-medium inline-block text-brand-darker absolute bottom-0">
                @php echo wp_get_attachment_caption($image); @endphp
              </span>
            @endif
              @if (!$image)
              <div class="aspect-ratio aspect-ratio--7x5 bg-gray-200"></div>
              @else
              @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full' ) ) @endphp
              @endif
            </div>
          </a>
          @else
          <div class="bg-gray-100">
            @if (wp_get_attachment_caption($image))
              <span class="pt-2 pr-4 bg-white text-xs font-medium inline-block text-brand-darker absolute bottom-0">
                @php echo wp_get_attachment_caption($image); @endphp
              </span>
            @endif
            @if (!$image)
            <div class="aspect-ratio aspect-ratio--7x5 bg-gray-200"></div>
            @else
            @php echo wp_get_attachment_image( $image, $size ); @endphp
            @endif
          </div>
          @endif
        </div>
        <div class="col-span-2 space-y-2">
          <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 xl:leading-13">
            @php echo $item['title'] @endphp
          </h2>
          <div class="sm:text-xl lg:text-lg xl:text-xl entry-content">@php echo $item['description'] @endphp</div>
          @if ($item['link'])
          <div class="h-px"></div>
          <div>
            <a
              title="@php echo $item['title'] @endphp"
              href="@php echo $item['link']['url'] @endphp" 
              class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-brand relative group sm:text-xl lg:text-lg xl:text-xl">
              <span class="border-t-2 -mt-px border-brand-darker block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
              Learn More
            </a>
          @endif
        </div>
      </div>
      @if ($i % 2 != 0)
      <div class="opacity-25 absolute top-0 -mt-10 right-0 w-1/2 pointer-events-none z-0 rellax">
        <img alt="Pattern" src="@asset('images/halftone.png')">
      </div>
      @endif
    </div>
    @php $i++; @endphp
    @endforeach
  </div>
</section>
@endif