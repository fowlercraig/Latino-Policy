@extract([
  'limit'   => $limit ?? 4,
  'ids'     => $ids ?? false,
  'desc'    => $desc ?? false,
  'role'    => $role ?? false,
  'orderby' => $orderby ?? 'menu_order',
])

@set($role_terms,null)

@if($role)
  @set($role_terms,array(
    array(
      'taxonomy' => 'role',
      'field' => 'slug',
      'terms' => $role,
    )
  ))
@endif

@query([
  'post_type'       => array('people'),
  'posts_per_page'  => $limit,
  'post__in'        => $ids,
  'order'           => 'DESC',
  'orderby'         => $orderby,
  'tax_query'       => $role_terms
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',['title'=>$title, 'desc'=>$desc])
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 xl:gap-10">
        @set($i,1)
          @posts
            @include('components.item-people')
          @php $i++ @endphp
        @endposts
      </div>
    </div>
  </section>
@endhasposts