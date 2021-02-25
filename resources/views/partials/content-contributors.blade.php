@set($terms, get_the_terms( $post->ID , 'issue', 'string'))
@set($term_ids, wp_list_pluck($terms,'term_id'))

@hasfields('related_people')
  @set($posts_in, get_field('related_people'))
  @set($tax_query, '')
@else
  @set($posts_in, '')
  @php
    $tax_query = array( array(
      'taxonomy'    => 'issue',
      'field'       => 'id',
      'terms'       => $term_ids,
      'operator'    => 'IN'
     ))
  @endphp
@endhasfields

@query([
  'post_type'       => 'people',
  'posts_per_page'  => 4,
  'order'           => 'ASC',
  'tax_query'       => $tax_query,
  'orderby'         => 'rand',
  'post__in'        => $posts_in,
])

@hasposts
  <div class="space-y-10">
    @include('components.section-header',['title'=>'Related Experts'])
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
      @posts
        @includeFirst(['components.item-'.get_post_type(), 'components.item-people'])
      @endposts
    </div>
  </div>
@endhasposts
