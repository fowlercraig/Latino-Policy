@php $items = get_field('mission') @endphp
@if ($items)
<section id="about" class="bg-brand-darker pt-10 lg:pt-20 pb-64 relative">
  <div class="container space-y-20 lg:space-y-40 relative z-10">
    <div>
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
        <div class="col-span-3 lg:order-last">
          @if ($items['link'])
          <a href="@php echo $item['link']['url'] @endphp" class="block">
            <div class="bg-gray-100">
              <img src="@php echo $items['image']['sizes']['large'] @endphp" alt="php echo $items['image']['alt'] @endphp" class="w-full h-full" />
            </div>
          </a>
          @else
          <div class="bg-gray-100">
            <img src="@php echo $items['image']['sizes']['large'] @endphp" alt="php echo $items['image']['alt'] @endphp" class="w-full h-full" />
          </div>
          @endif
        </div>
        <div class="col-span-2 space-y-2 relative">
          <div class="xl:-mr-48">
            <h2 class="font-display uppercase text-3xl sm:text-3xl lg:text-7xl  leading-7 sm:leading-9 font-bold text-white sm:text-4xl sm:leading-10 lg:leading-16 lg:tracking-tight">
              @php echo $items['title'] @endphp
            </h2>
          </div>
          <div class="text-brand-lighter sm:text-xl lg:text-lg xl:text-xl">@php echo $items['description'] @endphp</div>
          @if ($items['link'])
          <div class="h-px"></div>
          <div>
            <a
              title="@php echo $items['link']['title']; @endphp"
              href="@php echo $items['link']['url']; @endphp" 
              class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white relative group">
              <span class="border-t-2 -mt-px border-white block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
              @php echo $items['link']['title']; @endphp
            </a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="opacity-50 absolute top-0 left-0 pointer-events-none z-0">
    <img class="w-1/2" data-rellax-speed="5" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</section>
@endif