@query([
  'post_type'      => 'any',
  'posts_per_page' => 2,
  'post__in'       => get_field('impact_downloads'),
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
])

<section class="space-y-4 md:space-y-6 xl:space-y-10">
  <header class="container">
    <div class="prose prose-sm sm:prose md:prose-2xl">
      <h2 class="text-brand-dark">@field('impact_title')</h2>
    </div>
  </header>
  <div class="container">
    <div class="grid xl:grid-cols-2 gap-4 md:gap-6 xl:gap-10">
      <div data-aos="fade-up" class="xl:order-last">
        @image(get_field('impact_image'), 'large')
      </div>
      <div class="space-y-4">
        @posts
          <div class="block p-4 bg-white rounded border border-gray-100 hover:shadow-xl transition ease duration-500">
            <div class="prose md:prose-xl space-y-4">
              <h4><a href="@permalink">@title</a></h4>
              <div class="text-sm">{!! wp_trim_words( get_the_excerpt(), 30, '...' ) !!}</div>
              @fields('downloads')
                <div>
                  @set($file,get_sub_field('download'))
                  @include('components.button-animated-top',[
                    'cta'     =>'View Report', 
                    'classes' =>'text-white', 
                    'url'     => $file['url']
                  ])
                </div>
              @endfields
            </div>
          </div>
        @endposts
      </div>
    </div>
  </div>
</section>