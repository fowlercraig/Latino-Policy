<?php 
  $items = get_field('hero_carousel');
?>

<div class="p-6 overflow-hidden bg-primary">
  <div class="carousel carousel-fade" data-carousel-options='{"controls":true,"contained":false,"single":true}'>
    @php foreach($items as $item): @endphp
    <div class="carousel-slide">
      <div class="flex flex-wrap md:items-center">
        <div class="w-full md:w-1/3">
          <ul>@php
            $categories = $categories = get_the_category();
            foreach ( $categories as $category ): @endphp
            <li class="inline-block">
              <span class="bg-white text-primary inline-block py-1 px-2 text-xs font-bold mb-3">
                @php echo $category->name; @endphp
              </span>
            </li>
            @php endforeach;
          @endphp</ul>
          <h2 class="mb-3 text-2xl font-bold">
            <a class="text-white" href="{{ get_permalink() }}">@php echo $item['headline'] @endphp</a>
          </h2>
          <div class="text-white-75">
            @php echo $item['description'] @endphp
          </div>
          <a class="border-b border-red pb-1 text-sm text-white" href="@php echo $item['url'] @endphp">Read More</a>
        </div>
        <div class="w-full md:w-2/3">
          <div class="aspect-ratio aspect-ratio--7x5 bg-black">
            <div class="absolute inset-0 background" data-background-options='{"source":"@php echo $item["image"]["sizes"]["large"]; @endphp"}'></div>
          </div>
        </div>
      </div>
    </div>
    @php endforeach; @endphp
  </div>
</div>