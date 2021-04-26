<div class="xl:grid xl:grid-cols-3 gap-4 md:gap-6 xl:gap-10 xl:items-center space-y-6" data-aos="fade-up">
  <div class="col-span-2 @if($i & 1) xl:order-last @endif">
    <div class="aspect-w-16 aspect-h-9 xl:aspect-w-4 xl:aspect-h-3 2xl:aspect-w-16 2xl:aspect-h-9 bg-gray-100 relative">
      @if(get_sub_field('image'))
        @image(get_sub_field('image'), 'large', ['alt' => ' ', 'class' => 'w-full h-full object-cover object-center'])
      @endif
    </div>
  </div>
  <div class="prose prose-sm sm:prose md:prose-2xl mx-auto sm:mx-auto">
    <h2 class="text-brand-dark">@sub('title')</h2>
    <div class="text-base">@sub('description')</div>
    @hassub('link')
      @include('components.button-animated',[
        'cta'     => get_sub_field('link')['title'],
        'classes' => '', 
        'target'  => get_sub_field('link')['target'], 
        'url'     => get_sub_field('link')['url']
      ])
    @endsub
  </div>
</div>