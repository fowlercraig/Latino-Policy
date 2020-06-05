<article @php post_class() @endphp>
  
  <div class="bg-gray-50 py-4 md:py-10 mb-20">
    <div class="container space-y-4 lg:space-y-0 lg:grid grid-cols-4 xl:grid-cols-4 gap-12">

      <div class="col-span-2 xl:col-span-2 flex-none -ml-1 overflow-hidden lg:order-last">
        <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full' ) ); ?>
      </div>

      <div class="col-span-2 xl:col-span-2 space-y-4">
        <header class="py-4 flex border-b border-gray-200 items-center space-x-6">

          <div class="w-full">
            <div class="text-xs sm:text-base font-medium rounded overflow-hidden">
              @if(get_the_terms(get_the_ID(), 'role'))
              <a href="/people/" title="Opens People Page" class="text-brand hover:underline">People</a>
              <span class="text-gray-400">→</span>
              @endif

              @if(get_the_terms(get_the_ID(), 'role'))
              <a title="Opens @php echo get_the_terms(get_the_ID(), 'role')[0]->name; @endphp Page" href="/people/@php echo get_the_terms(get_the_ID(), 'role')[0]->slug; @endphp" class="text-brand hover:underline">@php echo get_the_terms(get_the_ID(), 'role')[0]->name; @endphp</a>
              @endif
            </div>
            <h1 class="font-display uppercase entry-title mt-1 text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:leading-none sm:text-6xl lg:text-7xl">{!! get_the_title() !!}</h1>

            <div class=""></div>

            @if(is_singular( 'person' ) && get_the_terms(get_the_ID(), 'issue'))
            <span class="text-brand">Issues</span>
            <span class="text-gray-400">→</span>
            @endif

            @if(get_the_terms(get_the_ID(), 'issue'))
            <a href="@php echo $issue @endphp" class="text-brand hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</a>
            @if (get_the_terms(get_the_ID(), 'issue')[1]->name)
            <a href="@php echo $issue @endphp" class="text-brand hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[1]->name; @endphp</a>
            @endif
            @if (get_the_terms(get_the_ID(), 'issue')[2]->name)
            <a href="@php echo $issue @endphp" class="text-brand hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[2]->name; @endphp</a>
            @endif
            @endif

            @if(get_field('title'))
            <div></div>
            <span class="text-gray-500">@php the_field('title') @endphp</span>
            @endif

            @if(get_field('association'))
            <span class="text-gray-500">@php the_field('association') @endphp</span>
            @endif
          </div>

        </header>

        @if (get_field('people'))
        @include('research.authors')
        <div class="h-px bg-gray-200"></div>
        @endif

        @if (get_field('people'))
        @include('research.download')
        <div class="h-px bg-gray-200"></div>
        @endif

        <div class="entry-content">
          @php the_content() @endphp
        </div>
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
      </div>
    </div>
  </div>
</article>
