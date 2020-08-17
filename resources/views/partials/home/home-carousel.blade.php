@php $items = get_field('carousel') @endphp

<section>
  <div id="carousel">
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
</section>
