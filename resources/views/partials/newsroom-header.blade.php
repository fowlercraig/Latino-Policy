@query([
  'post_type'       => array('research', 'press', 'event'),
  'posts_per_page'  => 1,
  'post__in'        => $ids,
  'order'           => 'ASC',
])

<div class="bg-brand-darker text-brand-lighter pt-6">
  <div class="container">
    <div class="carousel">
      @posts
        <div class="grid lg:grid-cols-2 gap-5 md:gap-10">
          <div class="lg:order-last">
            <div class="aspect-w-4 aspect-h-3 bg-brand relative">
              <div class="absolute inset-0">
                @set($image, get_post_thumbnail_id())
                @image($image, 'full', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
              </div>
            </div>
          </div>
          <div class="space-y-4 pb-6">
            @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
            <div class="prose prose-sm sm:prose md:prose-lg mx-auto sm:mx-auto">
              <h1 class="tracking-tight text-white">
                <span class="leading-none block">@title</span>
              </h1>
            </div>
            @excerpt
            @include('components.button-animated-top',[
              'cta'     => 'Learn More', 
              'classes' => 'text-white',
              'url'     => get_field('publication_link')['url'],
              'target'  => '_blank' 
            ])
          </div>
        </div>
      @endposts
    </div>
  </div>
</div>