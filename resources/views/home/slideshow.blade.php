@php $items = get_field('carousel') @endphp
<section id="slideshow" class="bg-black min-h-64 relative">
  <div class="carousel carousel-fades" data-carousel-options='{"autoAdvance":false,"pagination":false,"single":false,"controls":{"container":".controls","previous":".prev","next":".next"}}'>
  @foreach ($items as $item)
    <div class="slide pb-10 lg:pt-48 lg:pb-32 bg-black relative">
      <div class="lg:absolute inset-0 z-0 order-first">
        <img alt='@php echo $item["image"]["alt"]; @endphp' class="object-cover w-full h-full" src='@php echo $item["image"]["url"]; @endphp' />
      </div>
      <div class="container max-w-none relative z-10 order-last -mt-8">
        <div class="lg:max-w-lg xl:max-w-2xl space-y-4">
          @if ($item['subtitle'])
          <div class="inline-block bg-brand px-2 py-1">
            <span class="text-white font-medium">@php echo $item['subtitle'] @endphp</span>
          </div>
          @endif
          @if ($item['title'])
          <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl xl:text-5xl sm:leading-10 xl:leading-13 mb-0">
            @php echo $item['title'] @endphp
          </h2>
          @endif
          @if ($item['description'])
          <div class="text-white-75">@php echo $item['description'] @endphp</div>
          @endif
          @if ($item['link'])
          <a
            title="@php echo $item['title'] @endphp"
            href="@php echo $item['link']['url'] @endphp" 
            class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white relative group">
            <span class="border-t-2 -mt-px border-white block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
            @php echo $item['link']['title'] @endphp
          </a>
          @endif
        </div>
      </div>
    </div>
  @endforeach
  </div>
  <div class="absolute inset-x-0 left-0 bottom-0 z-40">
    <div class="container">
      <div class="controls">
        <div class="flex">
          <button class="prev h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-left"></i></button>
          <button class="next h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-right"></i></button>
        </div>
      </div>
    </div>
  </div>
</section>