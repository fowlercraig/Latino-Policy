<div class="relative bg-black text-white">
  <div class="aspect-w-5 aspect-h-7 sm:aspect-w-1 sm:aspect-h-1 md:aspect-w-4 md:aspect-h-3 lg:aspect-h-9 lg:aspect-w-16 2xl:aspect-w-21 relative">
    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black via-black to-transparent opacity-90"></div>
      @image(get_post_thumbnail_id(), 'full', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
    </div>
    <div class="absolute inset-0 flex items-end md:items-center">
      <div class="container">
        <div class="h-40"></div>
        <div class="md:w-2/3 space-y-4 pb-8 md:pb-0">
          @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
          <h1 class="tracking-tight font-bold text-4xl md:text-5xl xl:text-6xl 2xl:text-7xl leading-none font-primary-a uppercase">
            @title
          </h1>
          <div class="prose opacity-80">@excerpt</div>
          @include('components.button-animated-top',[
            'cta'     =>'Read More', 
            'classes' =>'text-white', 
            'url'     => get_permalink()
          ])
        </div>
      </div>
    </div>
  </div>
</div>