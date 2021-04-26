@extract([
  'limit'   => $limit ?? 4,
  'ids'     => $ids ?? false,
  'desc'    => $desc ?? false,
  'role'    => $role ?? false,
  'tax'     => $tax ?? false,
  'orderby' => $orderby ?? 'menu_order',
])

@set($tax_terms,null)
@set($currentPerson,null)

@if($role)
  @set($tax_terms,array(
    array(
      'taxonomy' => 'role',
      'field' => 'slug',
      'terms' => $role,
    )
  ))
@endif

@if($tax)
  @set($tax_terms,array(
    array(
      'taxonomy' => 'issue',
      'field' => 'slug',
      'terms' => $tax,
    )
  ))
@endif

@if(is_singular('people'))
  @set($currentPerson, get_the_ID())
@endif

@query([
  'post_type'       => array('people'),
  'posts_per_page'  => $limit,
  'post__in'        => $ids,
  'post__not_in'    => array($currentPerson),
  'order'           => 'ASC',
  'orderby'         => $orderby,
  'tax_query'       => $tax_terms
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