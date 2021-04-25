<article class="text-white bg-black relative group lg:h-full lg:min-h-[400px]" data-aos="fade-up">
  <div class="bg-black relative transform transition ease-in-out duration-500 hover:-translate-y-1 h-full relative">
    <div class="absolute inset-0 opacity-50 group-hover:opacity-25 transition ease-in-out duration-500">
      @if(get_the_post_thumbnail())
        <img src="@thumbnail('full', false)" alt="@title" class="w-full h-full object-cover" />
      @else
        <div class="text-6xl text-brand">
          @far('newspaper', 'w-full h-full object-contain')
        </div>
      @endif
    </div>
    <div class="relative flex flex-col px-4 md:px-6 xl:px-10 h-full">
      <div>@includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])</div>
      <div class="mt-4">
        <h2 class="tracking-tight font-bold text-2xl xl:text-4xl leading-none font-primary-a uppercase">@title</h2>
      </div>
      <div class="flex-1 min-h-[50px]"></div>
      <div class="pb-4 md:pb-6 xl:pb-8">
        @include('components.button-animated-top',[
          'cta'=>'Learn More', 
          'classes'=>'text-white', 
          'url'=> get_permalink()
        ])
      </div>
    </div>
  </div>
  <a href="@permalink" title="@title" class="absolute inset-0"></a>
</article>
