<article @php(post_class())>

  <div class="bg-gray-50">

    <div class="flex flex-wrap">

      <div class="lg:w-1/2 relative bg-gray-300 lg:order-last">
        @include('components.background-image',[
          'imageid'   => get_post_thumbnail_id(),
          'imagesize' => 'large'
        ])
      </div>

      <div class="container lg:w-1/2">

        <div class="mb-6">
          @include('partials.components.ui-eyebrow',['title' => get_the_terms(get_the_ID(), 'resource')[0]->name])
        </div>

        <header class="prose lg:prose-lg xl:prose-xl mb-4 max-w-none text-white">
          <h1 class="entry-title">{!! $title !!}</h1>
        </header>

        <div class="divide-y divide-gray-100">
          @include('partials.entry-excerpt',  ['spacing' => 'py-4'])
          @include('partials.entry-experts',  ['spacing' => 'py-4'])
          @include('partials.entry-download', ['spacing' => 'py-4'])
        </div>

      </div>

    </div>

  </div>

  <div class="entry-content prose lg:prose-lg mx-auto lg:py-12">
    @php(the_content())
  </div>

</article>
