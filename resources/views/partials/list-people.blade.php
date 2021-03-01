@empty($limit)
  @set($limit,4)
@endempty

@empty($ids)
  @set($ids,'')
@endempty

@notempty($role)
  
@endnotempty

@query([
  'post_type'       => array('people'),
  'posts_per_page'  => $limit,
  'post__in'        => $ids,
  'orderby'         => 'menu_order', 
  'order'           => 'ASC', 
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',['title'=>$title])
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-people')
        @endposts
      </div>
    </div>
  </section>
@endhasposts