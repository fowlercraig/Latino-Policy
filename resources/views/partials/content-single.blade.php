<article @php post_class() @endphp>
  
  <div class="bg-gray-50 py-4 md:py-10 mb-20 relative">
    <div class="container space-y-4 lg:space-y-0 lg:grid grid-cols-4 xl:grid-cols-4 gap-12 sticky-container">

      <div class="col-span-2 xl:col-span-2 flex-none -ml-1 overflow-hidden lg:order-last relative">
        <div class="sticky w-full" data-sticky-options='{"offset":100, "minWidth":"1024px"}' data-sticky-container='.sticky-container'>
          <?php the_post_thumbnail( 'large', array( 'class' => 'w-full' ) ); ?>
        </div>
      </div>

      <div class="col-span-2 xl:col-span-2 space-y-4">
        <header class="space-y-3">

          <div class="text-sm font-medium rounded overflow-hidden">

            @if(is_singular( 'event' )||is_singular( 'press' ))
            <a 
              title="Opens Press Archive in same window" 
              href="/press-archive" 
              class="text-brand px-1 hover:underline">Press Archive</a>
            <span class="text-gray-400">→</span>
            @endif

            @if(is_singular( 'research' ))
            <a 
              title="Opens Research Library in same window" 
              href="/research" 
              class="text-brand px-1 hover:underline">Research Library</a>
            <span class="text-gray-400">→</span>
            @endif

            @if(get_the_terms(get_the_ID(), 'resource'))
            <a 
              title="Opens @php echo $term->name; @endphp Taxonomy in same window" 
              href="@php echo get_the_permalink(696) @endphp?resource=@php echo get_the_terms(get_the_ID(), 'resource')[0]->slug; @endphp" 
              class="text-brand px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
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
          <div class="h-px bg-gray-200"></div>

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
      <img class="w-1/2 opacity-25" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </div>
</article>
