@query([
  'post_type'       => array('research'),
  'post__in'        => get_field('carousel_carousel'),
  'posts_per_page'  => -1,
  'order'           => 'DESC',
])

@hasposts
  <section class="relative bg-black">
    <div class="md:-mt-40 relative">
      <ul id="carousel" class="carousel">
        @posts
          <li>@include('components.item-hero')</li>
        @endposts
      </ul>
    </div>
    <div class="absolute inset-x-0 bottom-0">
      <div class="container flex outline-none" id="carousel-controls">
        @set($classes,'h-8 w-8 md:h-10 md:w-10 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110')
        <button class="prev {{ $classes }}"><i data-feather="chevron-left"></i></button>
        <button class="next {{ $classes }}"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </section>
@endhasposts


