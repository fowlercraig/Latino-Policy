@php $items = get_field('mission') @endphp
@if ($items)
<section id="about" class="bg-brand-dark pt-10 lg:pt-20 pb-64">
  <div class="container space-y-20 lg:space-y-40">
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
        <div class="col-span-2 space-y-2">
          <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
            @php echo $items['title'] @endphp
          </h2>
          <div class="text-brand-lighter">@php echo $items['description'] @endphp</div>
          @if ($items['link'])
          <div class="h-px"></div>
          <div><a href="@php echo $item['link']['url']; @endphp" class="{{ $learnmore }}">Learn More</a></div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endif