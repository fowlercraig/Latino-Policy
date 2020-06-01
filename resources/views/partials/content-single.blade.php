<article @php post_class() @endphp>
  
  <div class="bg-gray-50 py-4 md:py-10 mb-20">
    <div class="container space-y-4">
      <header class="py-4 border-b border-gray-200">

        <div class="text-xs sm:text-base font-medium rounded overflow-hidden">
          @if(get_the_terms(get_the_ID(), 'resource'))
          <a href="@php echo $resource @endphp" class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
          <span class="text-gray-400">→</span>
          @endif

          @if(is_singular( 'person' ) && get_the_terms(get_the_ID(), 'issue'))
          <span class="text-brand px-1">Issues</span>
          <span class="text-gray-400">→</span>
          @endif

          @if(get_the_terms(get_the_ID(), 'issue'))
          <a href="@php echo $issue @endphp" class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</a>
          @if (get_the_terms(get_the_ID(), 'issue')[1]->name)
          <a href="@php echo $issue @endphp" class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[1]->name; @endphp</a>
          @endif
          @if (get_the_terms(get_the_ID(), 'issue')[2]->name)
          <a href="@php echo $issue @endphp" class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[2]->name; @endphp</a>
          @endif
          @endif
        </div>
        <h1 class="entry-title mt-1 text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl">{!! get_the_title() !!}</h1>

        @if(get_field('title'))
        <span class="px-1 text-gray-500">@php the_field('title') @endphp</span>
        @endif

        @if(get_field('association'))
        <span class="px-1 text-gray-500">@php the_field('association') @endphp</span>
        @endif

      </header>

      @if (get_field('people'))
      @include('research.authors')
      <div class="h-px bg-gray-200"></div>
      @endif

      @if (get_field('people'))
      @include('research.download')
      <div class="h-px bg-gray-200"></div>
      @endif

      <div class="entry-content md:w-1/2">
        @php the_content() @endphp
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
    </div>
  </div>
</article>
