@query([
  'post_type'       => array('research', 'press', 'event'),
  'posts_per_page'  => -1,
  'post__in'        => $ids,
  'order'           => 'DESC',
  'orderby'         => 'post__in',
])

<div class="bg-brand-darker text-brand-lighter pt-6 pb-12 2xl:pb-0 relative">
  <div class="container">
    <ul class="carousel">
      @posts
        <li class="carousel-slide">
          <div class="grid xl:grid-cols-2 gap-4 xl:gap-10">
            <div class="xl:order-last">
              @set($image, get_post_thumbnail_id())
              @image($image, 'full', ['alt' => 'LPPI', 'class' => 'object-fit w-full h-auto'])
            </div>
            <div class="space-y-4 pb-6">
              @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
              <div class="prose prose-sm sm:prose">
                <h1 class="tracking-tight text-white">
                  <span class="leading-none block">@title</span>
                </h1>
              </div>
              @excerpt
              @if(get_field('publication_link'))
                @set($url,get_field('publication_link')['url'])
                @set($target,'_blank')
              @else
                @set($url,get_permalink())
                @set($target,'')
              @endif
              @include('components.button-animated-top',[
                'cta'     => 'Learn More', 
                'classes' => 'text-white',
                'url'     => $url,
                'target'  => $target 
              ])
            </div>
          </div>
        </li>
      @endposts
    </ul>
  </div>
  <div id="carousel-controls" class="absolute bottom-0 w-full outline-none">
    <div class="container flex">
      <button class="prev h-12 w-12 bg-brand flex items-center justify-center bg-opacity-75 hover:bg-opacity-50 transition ease duration-300">
        <i height="20px" width="20px" data-feather="chevron-left"></i>
        <span class="sr-only">Previous Slide</span>
      </button>
      <button class="next h-12 w-12 bg-brand flex items-center justify-center bg-opacity-full hover:bg-opacity-50 transition ease duration-300">
        <i height="20px" width="20px" data-feather="chevron-right"></i>
        <span class="sr-only">Next Slide</span>
      </button>
    </div>
  </div>
</div>