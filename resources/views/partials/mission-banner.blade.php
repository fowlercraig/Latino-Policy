@set($title, get_bloginfo('description'))
@set($desc,'The UCLA Latino Policy & Politics Initiative addresses the most critical domestic policy challenges facing Latinos and other communities of color through research, advocacy, mobilization, and leadership development to expand genuine opportunity for all Americans.')

<section class="bg-brand-darker pt-8 md:pt-12 xl:pt-20 overflow-hidden">
  <div class="container">
    <div class="text-white grid md:grid-cols-3 gap-6 items-center 2xl:items-start">
      <div class="space-y-4 relative z-20">
        <div class="h-0.5 w-32 bg-red-600"></div>
        <div class="lg:-mr-64">
          <h1 class="tracking-tight font-bold text-4xl md:text-5xl 2xl:text-6xl leading-8 md:leading-none font-primary-a uppercase">{!! $title !!}</h1>
        </div>
        <div class="prose opacity-75">{!! $desc !!}</div>
        @include('components.button-animated-top',[
          'cta'=>'About Us', 
          'classes'=>'', 
          'url'=> get_permalink(3483)
        ])
      </div>
      <div class="md:col-span-2 md:order-last" data-aos="fade-up">
        <div class="md:aspect-w-1 md:aspect-h-1 xl:aspect-w-7 xl:aspect-h-5 2xl:aspect-w-16 2xl:aspect-h-9 bg-black relative shadow-2xl">
          <div class="absolute inset-0">
            @image(3550, 'full', ['alt' => 'Voting Rights Project', 'class' => 'w-full h-full object-cover'])
          </div>
        </div>
      </div>
    </div>
  </div>
</section>