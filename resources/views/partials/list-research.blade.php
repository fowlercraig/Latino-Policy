@query([
  'post_type'       => array('research'),
  'posts_per_page'  => 4,
  'order'           => 'DESC',
])

@hasposts
  <section class="bg-brand-lightest py-8 md:py-12 xl:py-20">
    <div class="container space-y-6">
      @include('components.section-header',['title'=>'Featured Projects & Reports'])
      <div class="grid lg:grid-cols-2 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-research')
        @endposts
      </div>
    </div>
  </section>
@endhasposts