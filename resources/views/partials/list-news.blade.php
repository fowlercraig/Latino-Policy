@query([
  'post_type'       => 'press',
  'posts_per_page'  => 4,
  'order'           => 'DESC',
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',['title'=>'Featured News & Press'])
      <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-news')
        @endposts
      </div>
    </div>
  </section>
@endhasposts