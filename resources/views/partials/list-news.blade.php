@empty($tax)
  @set($tax,'')
  @set($tax_terms,'')
@else
  @php
    $tax_terms = array(
      array(
        'taxonomy' => 'issue',
        'terms'    => $tax,
        'operator' => 'IN' //Or 'AND' or 'NOT IN'
      )
    )
  @endphp
@endempty  

@query([
  'post_type'       => 'press',
  'posts_per_page'  => 4,
  'order'           => 'DESC',
  'tax_query'       => $tax_terms
])

@hasposts
  <section>
    <div class="container space-y-6">
      @include('components.section-header',[
        'title'     =>'Recent News & Press',
        'btnLabel'  =>'Visit the Newsroom',
        'btnLink'   =>'/newsroom',
      ])
      <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-news')
        @endposts
      </div>
    </div>
  </section>
@endhasposts