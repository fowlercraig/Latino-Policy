@php $work = get_field('work') @endphp
@php
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => 7,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
@endphp
<section id="impact">
  <div class="space-y-20 lg:space-y-40">
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-2 gap-12 lg:items-center">
        <div class="space-y-2">
          <h2 class="text-2xl sm:text-3xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
            @php echo $work['title'] @endphp
          </h2>
          <div class="h-2"></div>
          <div class="entry-content">
            @php echo $work['description'] @endphp
          </div>
        </div>
        <div class="col-span-2">
        <div class="lg:order-first col-span-2">
          <div class="space-y-4 lg:space-y-0 lg:grid grid-cols-2 gap-8">
            @php if ( $parent->have_posts() ): @endphp
            @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
            <a 
              href="@php the_permalink(); @endphp" 
              title="@php the_title(); @endphp" 
              class="p-6 block justify-start rounded-lg bg-gray-50 hover:bg-gray-100 transition ease-in-out duration-150 flex items-center">
                <div class="w-32 flex-none mr-4">
                  <div class="aspect-ratio aspect-ratio--1x1 bg-brand-darker rounded">
                    @php $image = get_field('icon'); $size = 'large'; @endphp
                    @php echo wp_get_attachment_image( $image, $size ); @endphp
                  </div>
                </div>
                <div class="space-y-2">
                  <h5 class="text-lg leading-6 font-medium text-brand-darker mb-0">@php the_title(); @endphp</h5>
                  <p class="text-sm">@php echo get_the_excerpt(); @endphp</p>
                </div>
            </a>
            @php endwhile @endphp
            @php endif @endphp
            @php wp_reset_postdata() @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</section>