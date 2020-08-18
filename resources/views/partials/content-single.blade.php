<article @php(post_class())>
  <header class="bg-brand-dark flex flex-wrap">
    <div class="container pb-10 w-full lg:w-2/5 order-last lg:order-first">
      <div class="space-y-6">
        @include('partials.components.ui-eyebrow',[
          'title'     => 'Welcome to the Thing', 
          'bgColor'   => 'bg-brand', 
          'textColor' => 'text-white'
        ])
        <div class="prose prose-sm sm:prose lg:prose-lg max-w-none">
          <h1 class="entry-title">
            <span class="text-white">{!! $title !!}</span>
          </h1>
        </div>
        @include('partials.entry-meta',['textColor' => 'text-white' ])
      </div>
    </div>
    <div class="relative bg-black w-full lg:w-3/5 h-64 lg:h-auto">
      @include('components.background-image',[
        'imagesize' => 'large',
      ])
    </div>
  </header>
  <div class="py-10 flex flex-wrap">
    <div class="lg:w-2/5 lg:order-last container">
      @include('partials.entry-sidebar')
    </div>
    <div class="lg:w-3/5 container">
      <div class="entry-content prose prose-sm sm:prose lg:prose-lg">
        @php(the_content())
      </div>
    </div>
  </div>
</article>
