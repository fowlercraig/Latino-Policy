@query([
  'post_type'       => array('event'),
  'posts_per_page'  => 3,
  'orderby'         => 'date',
  'order'           => 'DESC',
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',[
        'title'     => $title,
        'btnLabel'  => 'Visit the Newsroom',
        'btnLink'   => '/newsroom',
      ])
      <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-event')
        @endposts
      </div>
    </div>
  </section>
@endhasposts