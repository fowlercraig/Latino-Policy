<article @php post_class() @endphp>
  <div class="space-y-4">
    <header class="py-10 border-t border-b border-gray-100">
      <h1 class="entry-title text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">{!! get_the_title() !!}</h1>
    </header>

    @if (get_field('people'))
    @include('research.authors')
    <div class="h-px bg-gray-100"></div>
    @endif

    @if (get_field('people'))
    @include('research.download')
    <div class="h-px bg-gray-100"></div>
    @endif

    <div class="entry-content">
      @php the_content() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
  </div>
</article>
