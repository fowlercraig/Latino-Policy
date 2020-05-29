<div>
  <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
    <div class="col-span-3 lg:order-last">
      <a href="" class="block">
        <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100"></div>
      </a>
    </div>
    <div class="col-span-2 space-y-2">
      <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-3xl sm:leading-9">
        @php the_title(); @endphp
      </h2>
      <div class="text-brand-lighter">@php the_excerpt(); @endphp</div>
      <div class="h-px"></div>
      <div><a href="@php echo $item['link']['url']; @endphp" class="{{ $learnmore }}">Learn More</a></div>
    </div>
  </div>
</div>