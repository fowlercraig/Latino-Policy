@php $items = get_field('carousel') @endphp
<section id="slideshow" class="bg-black min-h-64 rellax">
  <div class="carousel carousel-fade" data-carousel-options='{"autoAdvance":false,"pagination":false,"single":true}'>
    
    @foreach ($items as $item)
    
    <div class="slide pb-10 sm:pt-48 sm:pb-32 bg-black relative">
      <div class="sm:absolute inset-0 z-0 order-first">
        <img alt='@php echo $item["image"]["alt"]; @endphp' class="object-cover w-full h-full" src='@php echo $item["image"]["url"]; @endphp'>
      </div>
      <div class="container relative z-10 order-last -mt-8">
        <div class="max-w-md space-y-4">
          @if ($item['subtitle'])
          <div class="inline-block bg-brand px-2 py-1">
            <span class="text-white font-medium">@php echo $item['subtitle'] @endphp</span>
          </div>
          @endif
          @if ($item['title'])
          <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10 mb-0">
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
            class="{{ $learnmore }}">@php echo $item['link']['title'] @endphp</a>
          @endif
        </div>
      </div>
    </div>
    
    @endforeach

  </div>
</section>