<article @php post_class() @endphp>
  
  <div class="bg-brand-dark py-4 md:pb-10 pt-24 -mt-16 mb-20 relative text-white">
    <div class="container space-y-4 lg:space-y-0 lg:grid grid-cols-4 xl:grid-cols-4 gap-12 sticky-container relative z-10">

      <div class="col-span-2 xl:col-span-2 flex-none -ml-1 overflow-hidden lg:order-last relative">
        <div class="w-full" data-sticky-options='{"offset":100, "minWidth":"1024px"}' data-sticky-container='.sticky-container'>
          <?php the_post_thumbnail( 'large', array( 'class' => 'w-full' ) ); ?>
        </div>
      </div>

      <div class="col-span-2 xl:col-span-2 space-y-4">
        <header class="space-y-3">

          <div class="text-sm font-medium rounded overflow-hidden">
            @if(get_the_terms(get_the_ID(), 'role'))
            <a href="/people/" title="Opens People Page" class="text-gray-100 hover:underline">People</a>
            <span class="text-white-75">→</span>
            @endif
            @if(get_the_terms(get_the_ID(), 'role'))
            <a title="Opens @php echo get_the_terms(get_the_ID(), 'role')[0]->name; @endphp Page" href="/people/@php echo get_the_terms(get_the_ID(), 'role')[0]->slug; @endphp" class="text-gray-100 hover:underline">@php echo get_the_terms(get_the_ID(), 'role')[0]->name; @endphp</a>
            @endif
          </div>

          <h1 class="font-display uppercase entry-title mt-1 text-4xl tracking-tight leading-10 font-bold text-white sm:leading-none sm:text-6xl lg:text-7xl">{!! get_the_title() !!}</h1>

          <div class="isssues">
            @if(is_singular( 'person' ) && get_the_terms(get_the_ID(), 'issue'))
            <div class="border-t border-white-25"></div>
            <span class="font-medium text-gray-100">Issues</span>
            <span class="text-white-75">→</span>
            @endif

            @if(get_the_terms(get_the_ID(), 'issue'))
            <div class="font-medium issues inline-flex flex-wrap space-x-px">
              @php $terms = get_the_terms(get_the_ID(), 'issue'); @endphp
              @foreach ($terms as $term)
              <a 
                title="Opens @php echo $term->name; @endphp Taxonomy in same window" 
                href="/research/?issue=@php echo $term->slug; @endphp" 
                class="flex-none text-gray-100 hover:underline">@php echo $term->name; @endphp</a>
              <span class="last:hidden">,</span>
              @endforeach
            </div>
            @endif
          </div>

          <div class="border-t border-white-25"></div>

          <div class="titles">
            @if(get_field('title'))
            <div class="font-medium">@php the_field('title') @endphp</div>
            @endif

            @if(get_field('affiliation'))
            <div class="font-medium">@php the_field('affiliation') @endphp</div>
            @endif

            @if(get_field('association'))
            <div class="font-medium">@php the_field('association') @endphp</div>
            @endif
          </div>

          <div class="border-t border-white-25"></div>

          <div class="titles inline-flex space-x-3 items-center">
            @php $email = get_field('email') @endphp
            @if ($email)
            <a href="@php echo $email['url'] @endphp" class="text-white hover:text-gray-100 transition ease duration-150">
              <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/>
              </svg>
            </a>
            @endif

            @if(get_field('twitter'))
            <a href="@php the_field('twitter') @endphp" class="text-white hover:text-gray-100 transition ease duration-150">
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
              </svg>
            </a>
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
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </div>
</article>
