<article @php(post_class(' space-y-12'))>
  
  <header class="grid grid-cols-2 gap-10 bg-gray-50">
    <div class="order-last">
      <div class="aspect-w-4 aspect-h-3 bg-brand-dark relative sticky top-10">
        <div class="absolute inset-0">
          @set($image, get_post_thumbnail_id())
          @image($image, 'large', ['alt' => ' ', 'class' => 'w-full h-full object-cover'])
        </div>
      </div>
    </div>
    <div class="space-y-4">
      @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
      <h1 class="entry-title tracking-tight font-bold text-5xl">{!! $title !!}</h1>
      @include('partials/entry-meta')
      @excerpt
      @include('components.divider')
      @includeFirst(['components.entry-contributors-'.get_post_type(), 'components.entry-contributors'])
      @include('components.divider')
      @includeFirst(['components.entry-downloads-'.get_post_type(), 'components.entry-downloads'])
      @include('components.divider')
    </div>
  </header>

  <div class="entry-content prose">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @includeFirst(['partials.content-related-'.get_post_type(), 'partials.content-related'])
  @includeFirst(['partials.content-realted-'.get_post_type(), 'partials.content-contributors'])
  
</article>
