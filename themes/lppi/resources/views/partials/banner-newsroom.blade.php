@set($title,get_field('press_title'))
@set($image,get_field('press_image'))
@set($desc,'')

<section>
  <div class="container" data-aos="fade-up">
    <div class="bg-brand-dark text-white flex flex-wrap">
      <div class="w-full md:w-1/2 lg:w-2/3 md:order-last h-64 md:h-auto">
        <div class="aspect-w-21 aspect-h-9 md:aspect-w-4 lg:aspect-w-21 md:aspect-h-3 lg:aspect-h-9 relative">
          <div class="absolute inset-0"> 
            @image($image, 'full', ['alt' => 'LPPI Press Releases', 'class' => 'w-full h-full object-cover'])
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 md:space-y-4 p-6 md:p-8 md:flex md:flex-col">
        <div class="hidden md:block h-0.5 w-32 bg-brand"></div>
        <h1 class="tracking-tight font-bold text-4xl md:text-5xl 2xl:text-6xl leading-8 md:leading-none font-primary-a uppercase mb-6 md:mb-0">{!! $title !!}</h1>
        @if($desc)
          <div class="prose opacity-75">{!! $desc !!}</div>
        @endif
        <div class="flex-grow"></div>
        <div>
          @include('components.button-animated-top',[
            'cta'=>'Learn More', 
            'classes'=>'', 
            'url'=> '/research'
          ])
        </div>
      </div>
    </div>
  </div>
</section>