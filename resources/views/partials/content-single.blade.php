<article @php post_class() @endphp>
  <header class="pt-10 bg-brand-darker">
    <div class="container group relative z-10">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12">
        @if (has_post_thumbnail())
        <div class="col-span-3 lg:order-last">
          <div class="h-full">
            @php the_post_thumbnail( 'large', array( 'class' => 'block object-cover h-full w-full' ) ); @endphp
          </div>
        </div>
        @endif
        <div class="
          @if (has_post_thumbnail())
          col-span-2 
          @else
          col-span-5
          @endif
          space-y-4 lg:pb-10">

          <div class="bg-brand inline-block py-1 px-2">
            @php if(get_the_terms(get_the_ID(), 'resource')): @endphp
            <span class="text-white font-medium">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</span>
            <span class="text-white font-medium">→</span>
            @php endif; @endphp
            @php if(get_the_terms(get_the_ID(), 'issue')): @endphp
            <span class="text-white font-medium">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</span>
            @php endif; @endphp
          </div>

          <h1 class="entry-title mt-1 text-4xl tracking-tight leading-10 font-bold text-white sm:leading-none sm:text-6xl lg:text-5xl">{!! get_the_title() !!}</h1>

          <div class="text-white-75 sm:text-xl lg:text-lg xl:text-xl">
            @php the_excerpt() @endphp
          </div>

          @if (get_field('people'))
          <div class="h-px bg-white-25"></div>
          @include('research.authors')
          @endif

          @if (get_field('people'))
          <div class="h-px bg-white-25"></div>
          @include('research.download')
          @endif

        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </header>
  <div class="h-10"></div>
  <div class="container group">
    <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12">
      <div class="col-span-3">
        <div class="entry-content sm:text-xl lg:text-lg xl:text-xl">
          @php the_content() @endphp
        </div>
      </div>
    </div>
  </div>
</article>

<div class="h-px bg-black-25 my-10"></div>
