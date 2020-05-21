<article @php post_class() @endphp>
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <header class="py-8">
      <ul>
        @php
          $categories = get_the_category();
          foreach ( $categories as $category ): @endphp
          <li class="inline-block">
            <span class="bg-primary text-white inline-block py-1 px-2 text-xs font-bold mb-3">
              @php echo $category->name; @endphp
            </span>
          </li>
          @php endforeach;
        @endphp
      </ul>
      <h1 class="entry-title text-5xl font-bold leading-12 text-brand-darker">
        {!! get_the_title() !!}
      </h1>
    </header>
    <div class="entry-content w-2/3 text-gray-500">
      @php the_content() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
  </div>
</article>
