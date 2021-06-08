@query([
  'post_type'       => array('research', 'event', 'press'),
  'posts_per_page'  => -1,
  'order'          => 'ASC',
  'meta_query' => array(
    array(
      'key'     => 'contributors',
      'value'   => 318 ,
      'compare' => 'LIKE'
    ),
    array(
      'key'     => 'contributors',
      'value'   => 320 ,
      'compare' => 'LIKE'
    )
  )
])

@hasposts
  @include('components.section-header',['title'=>'Related Content'])
  <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
    @posts
      @includeFirst(['components.item-'.get_post_type(), 'components.item-research'])
    @endposts
  </div>
@endhasposts
