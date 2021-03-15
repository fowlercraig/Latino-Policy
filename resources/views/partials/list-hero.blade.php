@query([
  'post_type'       => array('research'),
  'post__in'        => get_field('carousel_carousel'),
  'posts_per_page'  => -1,
  'order'           => 'DESC',
])

@hasposts
  <section>
    <div class="md:-mt-40">
      <ul class="carousel">
        @posts
          <li>@include('components.item-hero')</li>
        @endposts
      </ul>
    </div>
  </section>
@endhasposts
