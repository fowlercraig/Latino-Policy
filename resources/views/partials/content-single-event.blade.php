<article @php(post_class('space-y-5 md:space-y-12 xl:space-y-20'))>
  
  <header class="bg-brand-dark text-brand-lighter md:pt-12 md:-mt-12">
    <div class="h-px bg-white opacity-10"></div>
    <div class="container pt-6 grid lg:grid-cols-2 gap-5 md:gap-10">

      <div class="lg:order-last">
        <div class="shadow-xl">
          @image(get_post_thumbnail_id(), 'large', ['alt' => ' ', 'class' => 'w-full h-full object-cover'])
        </div>
      </div>

      <div class="space-y-4 pb-6">
        @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
        <div class="prose prose-sm sm:prose md:prose-lg mx-auto sm:mx-auto">
          <h1 class="tracking-tight text-white">
            <span class="leading-none block">{!! $title !!}</span>
          </h1>
        </div>
        @include('partials/entry-meta')
        @excerpt
        @include('components.divider',['classes'=>'bg-white opacity-20'])
        @includeFirst(['components.entry-contributors-'.get_post_type(), 'components.entry-contributors'])
      </div>

    </div>
  </header>

  <div class="container grid sm:grid-cols-2 gap-5 md:gap-10">
    <div class="prose entry-content max-w-full space-y-4">
      @php(the_content())
      @include('partials.event-newsmedia')
      @include('partials.event-downloads')
    </div>
    <div class="">
      @include('partials.event-gallery')
    </div>
  </div>

  <footer>
    <div class="container space-y-5 md:space-y-12 xl:space-y-20">
      @include('components.divider')
      @includeFirst(['partials.content-related-'.get_post_type(), 'partials.content-related'])
      @includeFirst(['partials.content-realted-'.get_post_type(), 'partials.content-contributors'])
    </div>
  </footer>

</article>