<article @php post_class() @endphp>
  @if (has_post_thumbnail())
  <div class="bg-brand-darker rellax">
    <?php the_post_thumbnail( 'large', array( 'class' => 'transition ease duration-300 w-full h-full' ) ); ?>
  </div>
  @endif
  <div class="bg-gray-50 py-4 md:py-10 mb-20 relative z-50">
    <div class="container space-y-4">
      <header class="py-4 border-b border-gray-200">

        <div class="text-xs sm:text-base font-medium rounded overflow-hidden">
          @if(get_the_terms(get_the_ID(), 'resource'))
          <a 
            title="Opens @php echo $term->name; @endphp Taxonomy in same window" 
            href="@php echo get_the_permalink(696) @endphp?resource=@php echo get_the_terms(get_the_ID(), 'resource')[0]->slug; @endphp" 
            class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
          <span class="text-gray-400">→</span>
          @endif

          @if(is_singular( 'person' ) && get_the_terms(get_the_ID(), 'issue'))
          <span class="text-brand px-1">Issues</span>
          <span class="text-gray-400">→</span>
          @endif

          @if(get_the_terms(get_the_ID(), 'issue'))
          <div class="font-medium issues inline-flex flex-wrap space-x-px">
            @php $terms = get_the_terms(get_the_ID(), 'issue'); @endphp
            @foreach ($terms as $term)
            <a 
              title="Opens @php echo $term->name; @endphp Taxonomy in same window" 
              href="@php echo get_the_permalink(696) @endphp?issue=@php echo $term->slug; @endphp" 
              class="flex-none text-brand hover:underline">@php echo $term->name; @endphp</a>
            <span class="last:hidden">,</span>
            @endforeach
          </div>
          @endif

        </div>
        <h1 class="entry-title mt-1 text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl">{!! get_the_title() !!}</h1>

        @if(get_field('title'))
        <div class="px-1 text-gray-500">@php the_field('title') @endphp</div>
        @endif

        @if(get_field('association'))
        <div class="px-1 text-gray-500">@php the_field('association') @endphp</div>
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
