<article class="overflow-hidden text-white" data-aos="fade-up">
  <div class="aspect-w-4 aspect-h-3 md:aspect-w-21 md:aspect-h-9 lg:aspect-w-4 lg:aspect-h-3 bg-black relative">
    <div class="absolute inset-0 opacity-50">
      @if(get_the_post_thumbnail())
        <img src="@thumbnail('full', false)" alt="@title" class="w-full h-full object-cover" />
      @else
        <div class="text-6xl text-brand">
          @far('newspaper', 'w-full h-full object-contain')
        </div>
      @endif
    </div>
    <div class="absolute inset-0 flex flex-col px-4 md:px-6 xl:px-10">
      <div>@includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])</div>
      <div class="mt-4">
        <h2 class="tracking-tight font-bold text-2xl xl:text-4xl leading-none font-primary-a uppercase">@title</h2>
      </div>
      <div class="flex-1"></div>
      <div class="pb-4 md:pb-6 xl:pb-8">
        @include('components.button-animated-top',[
          'cta'=>'Learn More', 
          'classes'=>'text-white', 
          'url'=> get_permalink()
        ])
      </div>
    </div>
  </div>
</article>
