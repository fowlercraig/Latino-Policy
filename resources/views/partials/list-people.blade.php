@empty($limit)
  @set($limit,4)
@endempty

@empty($ids)
  @set($ids,'')
@endempty

@empty($role)
  @set($role,'')
  @set($role_terms,'')
@else
  @php
    $role_terms = array(
      array(
        'taxonomy' => 'role',
        'field' => 'slug',
        'terms' => $role,
      )
    )
  @endphp
@endempty  

@query([
  'post_type'       => array('people'),
  'posts_per_page'  => $limit,
  'post__in'        => $ids,
  'order'           => 'ASC',
  'orderby'         => 'menu_order',
  'tax_query'       => $role_terms
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