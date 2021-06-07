@extract([
  'posts'     => $posts ?? false,
  'tax'       => $tax ?? false,
  'limit'     => $limit ?? 4,
  'orderby'   => $orderby ?? 'date',
  'post_type' => $post_type ?? 'research',
])

@set($tax_terms,null)
@set($meta_terms,null)

@if($tax)
  @set($tax_terms,array(
    array(
      'taxonomy'  => 'issue',
      'field'     => 'slug',
      'terms'     => $tax,
    )
  ))
@endif

@if(is_singular('people'))
  @set($meta_terms,array(
    array(
      'key'     => 'contributors',
      'value'   => '"' . get_the_ID() . '"',
      'compare' => 'LIKE'
    )
  ))
@endif

@query([
  'post_type'       => $post_type,
  'posts_per_page'  => $limit,
  'post__in'        => $posts,
  'post__not_in'    => array($post->ID),
  'tax_query'       => $tax_terms,
  'meta_query'      => $meta_terms,
  'orderby'         => $orderby,
  'order'           => 'DESC',
])

@hasposts
  <section class="@if(is_front_page()) bg-brand-lightest py-5 md:py-12 xl:py-20 @endif">
    <div class="container space-y-6">
      @include('components.section-header',['title'=>$title])
      <div class="grid lg:grid-cols-2 gap-4 md:gap-6 xl:gap-10">
        @posts
          @include('components.item-research')
        @endposts
      </div>
    </div>
  </section>
@endhasposts