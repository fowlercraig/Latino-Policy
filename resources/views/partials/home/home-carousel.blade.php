@php $items = get_field('carousel') @endphp

<section class="relative">
  <div id="carousel" class="relative bg-black">
    @foreach ($items as $item)
      <div>
        @include(
          'partials.components.featured-carousel-card',[
            'cat'     => get_the_terms(get_the_ID(), 'issue')[0]->name,
            'title'   => $item['title'],
            'excerpt' => $item['description'],
            'link'    => 'Learn More',
            'url'     => get_the_permalink(),
            'imageid' => $item["image"]["id"],
          ])
      </div>
    @endforeach
  </div>
  <div class="absolute inset-x-0 bottom-0 z-40 text-white">
    <div id="carousel-controls" class="container flex controls items-center h-20 space-x-1 outline-none">
      <button data-controls="prev" class="prev w-12 h-12 rounded-full flex items-center justify-center bg-brand transition ease duration-300">
        <i data-feather="chevron-left"></i>
        <span class="sr-only">Previous</span>
      </button>
      <button data-controls="next" class="next w-12 h-12 rounded-full flex items-center justify-center bg-brand transition ease duration-300">
        <i data-feather="chevron-right"></i>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</section>
