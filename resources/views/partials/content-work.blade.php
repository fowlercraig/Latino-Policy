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
      <div class="flex space-x-4 md:space-x-6 p-4 md:p-6 transition ease duration-300 hover:bg-gray-50 group">
        <div class="w-20 h-20 lg:h-32 lg:w-32 flex-none relative rounded bg-white shadow group-hover:shadow-2xl transform group-hover:-translate-y-1 transition ease duration-500">
          <div class="absolute inset-0">
            @set($image,get_field('icon'))
            @image($image, 'medium', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
          </div>
        </div>
        <div class="prose prose-sm sm:prose md:prose-lg">
          <h2 class="text-brand-dark">@title</h2>
          <div class="text-base">@excerpt</div>
          @include('components.button-animated',[
            'cta'=> 'Learn More', 
            'classes' => '',
            'url'=> get_permalink() 
          ])
        </div>
      </div>
    @endposts
  </div>
</div>