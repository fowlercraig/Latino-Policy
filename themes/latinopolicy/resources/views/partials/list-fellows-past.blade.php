@query([
  'post_type'       => array('people'),
  'posts_per_page'  => -1,
  'order'           => 'DESC',
  'post__not_in'    => get_field('current_fellows',3787),
  'tax_query'       => array(
    array(
      'taxonomy'     => 'role',
      'field'        => 'slug',
      'terms'        => 'fellows'
    )
  )
])

@hasposts
  <section class="iso-past-fellows">
    <div class="container space-y-6">
      @include('components.section-header',['title'=>'Alumni Fellows'])
      @include('components.filter-past-fellows')
      <div class="isotope flex flex-wrap -m-2 md:-m-3 xl:-m-5">
        @posts
          <div class="iso-person filter-{{ preg_replace('/\s*/', '', get_field('graduation_year')) }} w-1/2 lg:w-1/4 p-2 md:p-3 xl:p-5">
            @include('components.item-people')
          </div>
        @endposts
      </div>
    </div>
  </section>
@endhasposts