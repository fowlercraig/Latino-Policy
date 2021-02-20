<div class="bg-gray-400 relative">
  <div class="aspect-w-3 md:aspect-w-4 lg:aspect-w-16 2xl:aspect-w-21 aspect-h-4 md:aspect-h-3 lg:aspect-h-9 relative">
    <div class="absolute inset-0">
      @php $image = get_sub_field('image') @endphp
      @image($image, 'full', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-75"></div>
  </div>
  <div class="py-12 absolute inset-0 flex items-end justify-center">
    <div class="container">
      <div class="prose prose-sm sm:prose mb-6 text-white">
        <h4>@sub('subtitle')</h4>
        <h1 class="tracking-tight">@sub('title')</h1>
        <p class="opacity-75">@sub('description')</p>
      </div>
      @hasfield('link')
        @include('components.button-animated',[
          'cta'=>get_sub_field('link')['title'], 
          'url'=>get_sub_field('link')['url'], 
        ])
      @endfield
    </div>
  </div>
</div>