@set($title,'Research Library')
@set($desc,'<p>Our research library provides access to our original research, policy reports, and other assets to expand the understanding and attention to Latino issues.</p>')

<section>
  <div class="container bg-black pr-0" data-aos="fade-up">
    <div class="text-white flex items-center">
      <div class="w-full md:w-1/3 md:order-last h-64 md:h-auto">
        @image(3635, 'full', ['alt' => 'LPPI Research Library', 'class' => 'w-full h-full object-cover'])
      </div>
      <div class="w-full md:w-2/3 py-6 lg:py-12 space-y-4">
        <div class="h-0.5 w-32 bg-red-600"></div>
        <h1 class="tracking-tight font-bold text-4xl md:text-5xl 2xl:text-6xl leading-8 md:leading-none font-primary-a uppercase">{!! $title !!}</h1>
        <div class="prose opacity-75">{!! $desc !!}</div>
        @include('components.button-animated-top',[
          'cta'=>'Learn More', 
          'classes'=>'', 
          'url'=> '/research'
        ])
      </div>
    </div>
  </div>
</section>