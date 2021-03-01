@empty($tax)
  @set($tax,'')
  @set($tax_terms,'')
@else
  @php
    $tax_terms = array(
      array(
        'taxonomy' => 'issue',
        'field' => 'slug',
        'terms' => $tax,
      )
    )
  @endphp
@endempty  

@empty($resource)
  @set($resource,'')
  @set($tax_terms,'')
@else
  @php
    $tax_terms = array(
      array(
        'taxonomy' => 'resource',
        'field' => 'slug',
        'terms' => $resource,
      )
    )
  @endphp
@endempty  

@empty($title)
  @set($title, 'Recent News & Press')
@endempty

@query([
  'post_type'       => array('research','press'),
  'posts_per_page'  => 4,
  'order'           => 'ASC',
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