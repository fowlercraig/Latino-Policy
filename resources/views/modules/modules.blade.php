@php $items = get_field('modules') @endphp
@if ($items)
<section id="modules">
  <div class="space-y-20 lg:space-y-40">
    @php $i = 0; @endphp
    @foreach ($items as $item)
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
        <div class="col-span-3 @if ($i % 2 != 0): lg:order-last @endif">
          @if ($item['link'])
          <a href="@php echo $item['link']['url'] @endphp" class="block">
            <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100"></div>
          </a>
          @else
          <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100"></div>
          @endif
        </div>
        <div class="col-span-2 space-y-2">
          <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-dark sm:text-4xl sm:leading-10">
            @php echo $item['title'] @endphp
          </h2>
          <div>@php echo $item['description'] @endphp</div>
          @if ($item['link'])
          <div class="h-px"></div>
          <div><a href="@php echo $item['link']['url']; @endphp" class="{{ $learnmore }}">Learn More</a></div>
          @endif
        </div>
      </div>
    </div>
    @php $i++; @endphp
    @endforeach
  </div>
</section>
@endif