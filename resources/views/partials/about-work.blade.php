@query([
  'post_type'      => 'page',
  'posts_per_page' => -1,
  'post_parent'    => 3481,
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
])

<section class="container bg-gray-100 py-4 md:py-12 xl:py-20 space-y-4 md:space-y-6 xl:space-y-10">
  <header>
    <div class="prose prose-sm sm:prose md:prose-2xl">
      <h2 class="text-brand-dark">@field('work_title')</h2>
      <div class="text-base">@field('work_description')</div>
    </div>
  </header>
  <div class="">
    <div class="grid lg:grid-cols-2 gap-4 md:gap-6 xl:gap-10">
      @posts
        <a href="@permalink" class="block p-4 bg-white rounded shadow-sm flex lg:items-center hover:shadow-xl transition ease duration-500">
          <div class="w-1/3 md:w-1/5 flex-none">
            <div class="aspect-w-1 aspect-h-1 bg-brand-dark"></div>
          </div>
          <div class="w-full pl-4 prose md:prose-xl">
            <h4>@title</h4>
            <div class="text-sm">@excerpt</div>
          </div>
        </a>
      @endposts
    </div>
  </div>
</section>