@set($title,'Press Archive')

<section>
  <div class="container">
    <div class="bg-brand-lightest text-brand-darker p-12 text-center space-y-2 group">
      <span class="block">For more, visit the</span>
      <h1 class="tracking-tight font-bold text-4xl md:text-6xl font-primary-a uppercase">{!! $title !!}</h1>
      @include('components.button-animated',[
        'cta'   => get_field('press_link')['title'], 
        'url'   => get_field('press_link')['url'],
        'group' => true
      ])
    </div>
  </div>
</section>