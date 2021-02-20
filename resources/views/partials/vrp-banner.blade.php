@set($title,'Voting Rights Project')
@set($desc,'<p>The UCLA Voting Rights Project is the flagship project of the UCLA Latino Policy & Politics Initiative aimed at creating an accessible and equitable system of voting for all Americans through impact litigation, research, and clinical education to expand access to the ballot box.</p>')

<section>
  <div class="container bg-black pr-0" data-aos="fade-up">
    <div class="text-white flex flex-wrap items-center">
      <div class="w-full md:w-1/3 md:order-last h-64 md:h-auto">
        @image(3549, 'full', ['alt' => 'Voting Rights Project', 'class' => 'w-full h-full object-cover'])
      </div>
      <div class="w-full md:w-2/3 py-6 lg:py-12 space-y-4">
        <h1 class="tracking-tight font-bold text-4xl md:text-5xl 2xl:text-6xl leading-8 md:leading-none font-primary-a uppercase">{!! $title !!}</h1>
        <div class="h-0.5 w-32 bg-red-600"></div>
        <div class="prose opacity-75">{!! $desc !!}</div>
        @include('components.button-animated-top',[
          'cta'=>'Learn More', 
          'classes'=>'', 
          'url'=> get_permalink(3483)
        ])
      </div>
    </div>
  </div>
</section>