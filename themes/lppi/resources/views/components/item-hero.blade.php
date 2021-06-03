<div class="relative bg-black text-white">
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black via-black to-transparent opacity-90"></div>
    @image(get_post_thumbnail_id(), 'full', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
  </div>
  <div class="relative">
    <div class="pt-12 pb-12 md:pb-16 flex items-end md:items-center">
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