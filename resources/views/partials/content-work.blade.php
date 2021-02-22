@set($id,get_the_ID())
@query([
  'post_type'      => 'page',
  'posts_per_page' => -1,
  'post_parent'    => $id,
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
])

<div class="container">
  <div class="border-4 border-brand-dark grid xl:grid-cols-2">
    @posts
      <div class="flex space-x-4 md:space-x-6 p-4 md:p-6 hover:bg-gray-50">
        <div class="w-20 h-20 lg:h-32 lg:w-32 bg-gray-200 flex-none"></div>
        <div class="prose prose-sm sm:prose md:prose-lg">
          <h2 class="text-brand-dark">@title</h2>
          <div class="text-base">@excerpt</div>
        </div>
      </div>
    @endposts
  </div>
</div>