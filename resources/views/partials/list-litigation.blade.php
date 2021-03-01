@empty($ids)
  @set($ids,'')
@endempty

@query([
  'post_type'       => array('research','press','event'),
  'posts_per_page'  => -1,
  'post__in'        => $ids
])

@hasposts
  <section class="@if(is_front_page()) bg-brand-lightest py-5 md:py-12 xl:py-20 @endif">
    <div class="container space-y-6 md:space-y-12">
      @include('components.section-header',['title'=>$title])
      <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6 xl:gap-10">
        @posts
          <div class="border-b border-gray-100 pb-4 md:pb-6 xl:pb-10 space-y-2">
            <div class="text-sm text-brand font-medium">@published</div>
            <a href="@permalink" class="prose block">
              <h3 class="text-brand-dark">
                @title
              </h3>
            </a>
          </div>
        @endposts
      </div>
    </div>
  </section>
@endhasposts