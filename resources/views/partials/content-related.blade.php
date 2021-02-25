@set($posttype, get_post_type())
@set($terms, get_the_terms( $post->ID , 'issue', 'string'))
@set($term_ids, wp_list_pluck($terms,'term_id'))

@hasfields('related_research')
  @set($posts_in, get_field('related_research'))
@else
  @set($posts_in, '')
@endhasfields

@query([
  'post_type'       => $posttype,
  'posts_per_page'  => 4,
  'order'           => 'ASC',
  'post__in'        => $posts_in,
  'tax_query'       => array(
    array(
      'taxonomy'    => 'issue',
      'field'       => 'id',
      'terms'       => $term_ids,
      'operator'    => 'IN'
     )),
  'orderby'         => 'rand',
  'post__not_in'    => array($post->ID)
])

@hasposts
  <div class="space-y-10">
    @include('components.section-header',['title'=>'From the Research Library'])
    <div class="grid lg:grid-cols-2 gap-6">
      @posts
        @includeFirst(['components.item-'.get_post_type(), 'components.item-research'])
      @endposts
    </div>
  </div>
@endhasposts
