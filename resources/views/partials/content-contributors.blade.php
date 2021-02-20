@set($terms, get_the_terms( $post->ID , 'issue', 'string'))
@set($term_ids, wp_list_pluck($terms,'term_id'))

{{ var_dump($term_ids) }}

@query([
  'post_type'       => 'people',
  'posts_per_page'  => 6,
  'order'           => 'ASC',
  'tax_query'       => array(
    array(
      'taxonomy'    => 'issue',
      'field'       => 'id',
      'terms'       => $term_ids,
      'operator'    => 'IN'
     )),
  'orderby'         => 'rand',
])

@hasposts
  @include('components.section-header',['title'=>'Related Content'])
  <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
    @posts
      @includeFirst(['components.item-'.get_post_type(), 'components.item-research'])
    @endposts
  </div>
@endhasposts
