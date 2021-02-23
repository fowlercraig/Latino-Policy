<article @php(post_class('space-y-5 md:space-y-12 xl:space-y-20'))>
  <div class="bg-brand-dark text-brand-lighter md:pt-12 md:-mt-12 ">
    <div class="h-px bg-white opacity-10"></div>
    <header class="container grid sm:grid-cols-2 gap-5 md:gap-10">
      <div class="md:order-last -mx-4 -mt-5 md:mx-0">
        <div class="aspect-w-16 aspect-h-9 md:aspect-w-4 md:aspect-h-3 bg-brand-dark relative sticky top-10">
          <div class="absolute inset-0">
            @set($image, get_post_thumbnail_id())
            @image($image, 'large', ['alt' => ' ', 'class' => 'w-full h-full object-cover'])
          </div>
        </div>
      </div>
      <div class="space-y-4">
        @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
        <h1 class="tracking-tight font-bold text-4xl sm:text-5xl text-white">{!! $title !!}</h1>
        @include('partials/entry-meta')
        @excerpt
        @include('components.divider')
        @includeFirst(['components.entry-contributors-'.get_post_type(), 'components.entry-contributors'])
        @include('components.divider')
        @includeFirst(['components.entry-downloads-'.get_post_type(), 'components.entry-downloads'])
        @include('components.divider')
      </div>
    </header>
  </div>

  <div class="container space-y-12">
    <div class="entry-content prose">
      @php(the_content())
    </div>

    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>

    @includeFirst(['partials.content-related-'.get_post_type(), 'partials.content-related'])
    @includeFirst(['partials.content-realted-'.get_post_type(), 'partials.content-contributors'])
  </div>
  
</article>
