<article @php post_class() @endphp>
  <header class="pt-24 -mt-16 bg-brand-darker">
    <div class="group relative z-10">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12">
        @if (has_post_thumbnail())
        <div class="col-span-3 lg:order-last">
          <div class="h-full">
            @php the_post_thumbnail( 'large', array( 'class' => 'block object-cover h-full w-full' ) ); @endphp
          </div>
        </div>
        @endif
        <div class="
          container
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

          <div class="prose prose-sm sm:prose lg:prose-lg">
            <h1><div class="text-white">{!! get_the_title() !!}</div></h1>
          </div>

          @if(get_field('event_date'))
          <div class="text-white font-medium">
            <span class="text-brand-light">Event Date →</span>
            <?php the_field('event_date'); ?>
          </div>
          @endif

          @if(is_singular('research'))
          <div class="text-white font-medium">
            <span class="text-brand-light">Posted →</span>
            @php echo get_the_date( 'M dS, Y', $post->ID ) @endphp
          </div>
          @endif

          <div class="text-white-75 prose prose-sm sm:prose lg:prose-lg">
            <div class="text-white-75">@php the_excerpt() @endphp</div>
          </div>

          @if (get_field('people'))
          <div class="h-px bg-white-25"></div>
          @include('research.authors')
          @endif

          @if (get_field('file'))
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
        <div class="prose prose-sm sm:prose lg:prose-lg">
          @php the_content() @endphp
        </div>
      </div>

      @if (is_singular('event'))

      <div class="col-span-2">
        <div class="space-y-4">
          @if(get_field('video_embed'))
          <div class="embed-container">
            <?php the_field('video_embed'); ?>
            <iframe src="" class="hidden"></iframe>
          </div>
          @endif
          @if(get_field('gallery'))
          <header class="flex justify-between items-center">
            <div class="prose">
              <h3>Gallery</h3>
            </div>
            <div id="carousel-controls" class="flex controls items-center space-x-1 outline-none">
              <button data-controls="prev" class="prev w-8 h-8 rounded-full flex items-center justify-center bg-brand transition ease duration-300 text-white">
                <i data-feather="chevron-left"></i>
                <span class="sr-only">Previous</span>
              </button>
              <button data-controls="next" class="next w-8 h-8 rounded-full flex items-center justify-center bg-brand transition ease duration-300 text-white">
                <i data-feather="chevron-right"></i>
                <span class="sr-only">Next</span>
              </button>
            </div>
          </header>
          <div id="gallery">
            @php $count = 1; $images = get_field('gallery') @endphp
            @foreach ($images as $image)
            @if($count%8 == 1)<div class="slide"><div class="my-gallery grid grid-cols-4 gap-1 mb-6" itemscope itemtype="http://schema.org/ImageGallery">@endif
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">

              <a class="aspect-ratio aspect-ratio--1x1 bg-red-500 block relative" href="@php echo $image['url'] @endphp" itemprop="contentUrl" data-size="@php echo $image['width'] @endphpx@php echo $image['height'] @endphp">
                <div class="absolute inset-0">
                  <img class="h-full w-full object-cover" src="@php echo $image['sizes']['medium'] @endphp" itemprop="thumbnail" alt="Image description" />
                </div>
              </a>
              <figcaption class="sr-only" itemprop="caption description">Image caption  1</figcaption>
            </figure>
          @if($count%8 == 0)</div></div>@endif
            @php $count++; @endphp
            @endforeach
          </div>
          @endif
        </div>
      </div>

      @endif

    </div>
  </div>
</article>

<div class="h-px bg-black-5 my-10"></div>

@include('partials.photoswipe')