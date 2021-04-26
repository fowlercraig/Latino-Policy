@extract([
  'title'     => $title ?? 'Recent News & Press',
  'resource'  => $resource ?? false,
  'tax'       => $tax ?? false,
  'orderby'   => $orderby ?? 'date',
  'post_type' => $post_type ?? 'press',
  'tax'       => $tax ?? false,
])

@set($tax_terms,null)

@if($tax)
  @set($tax_terms,array(
    array(
      'taxonomy' => 'issue',
      'field' => 'slug',
      'terms' => $tax,
    )
  ))
@endif

@if($resource)
  @set($tax_terms,array(
    array(
      'taxonomy' => 'resource',
      'field' => 'slug',
      'terms' => $resource,
    )
  ))
@endif

@query([
  'post_type'       => $post_type,
  'posts_per_page'  => 4,
  'orderby'         => $orderby,
  'order'           => 'DESC',
  'tax_query'       => $tax_terms
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',[
        'title'     => $title,
        'btnLabel'  => 'Visit the Newsroom',
        'btnLink'   => '/newsroom',
      ])
      <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-news')
        @endposts
      </div>
    </div>
  </section>
@endhasposts