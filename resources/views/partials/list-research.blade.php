@extract([
  'ids'       => $ids ?? false,
  'limit'     => $limit ?? 4,
  'orderby'   => $orderby ?? 'date',
  'post_type' => $post_type ?? 'research',
])


@query([
  //'post_type'       => array('research','press','event'),
  'post_type'       => $post_type,
  'posts_per_page'  => $limit,
  'orderby'         => $orderby,
  'order'           => 'DESC',
  'post__in'        => $ids
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