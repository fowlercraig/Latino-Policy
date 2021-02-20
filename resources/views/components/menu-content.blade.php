@query([
  'post_type'      => 'page',
  'posts_per_page' => -1,
  'post_parent'    => $id,
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
])

<div 
  id="dropdown-{!! $title !!}"  
  x-show="menu === '{!! $title !!}'"
  x-description="Flyout menu, show/hide based on flyout menu state."> 
  <div class="py-6 md:py-10 grid grid-cols-2 gap-4 md:gap-6">
    <div class="space-y-4">
      <div class="prose md:prose-lg lg:prose-xl max-w-full">
        <h1 class="uppercase font-primary-a text-brand-darker uppercase tracking-tight">{{ $title }}</h1>
      </div>
      <div class="prose prose-sm sm:prose">
        <p>{!! get_the_excerpt($id) !!}</p>
      </div>
      <div>
        @include('components.button-animated',[
          'cta'     =>'Learn More', 
          'classes' =>'',
          'url'      =>get_the_permalink()
        ])
      </div>
    </div>
    <div>
      <div class="grid grid-cols-2 gap-2 md:gap-4">
        @posts
          <a href="@permalink" class="p-6 bg-gray-100 hover:bg-gray-200">@title</a>
        @endposts
      </div>
    </div>
  </div>
</div>