@php $impact = get_field('Impact') @endphp
@php
  $ids = get_field('downloads', false, false);
  $args = array(
    'post_type'      => array('research', 'press', 'event'),
    'posts_per_page' => 8,
    'order'          => 'ASC',
    'post__in'       => $ids,
    'post_status'    => 'any',
    'orderby'        => 'post__in',
  );
  $parent = new WP_Query( $args );
@endphp
<section id="impact">
  <div class="space-y-20 lg:space-y-40">
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-2 gap-12 lg:items-center">
        <div class="lg:order-last">
          @php $image = $impact['image']; $size = 'large'; @endphp
          @php echo wp_get_attachment_image( $image, $size ); @endphp
        </div>
        <div class="space-y-2">
          <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-dark sm:text-4xl sm:leading-10">
            @php echo $impact['title'] @endphp
          </h2>
          <div class="h-2"></div>
          <div class="entry-content">
            @php echo $impact['description'] @endphp
          </div>
          <div class="space-y-4">
            @php if ( $parent->have_posts() ): @endphp
            @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
            @php $file = get_field('file'); @endphp
            <a 
              download
              @if ($file)
                href="@php echo $file['url']; @endphp" 
              @else 
                href="@php the_permalink(); @endphp" 
              @endif
              title="Downloads @php the_title(); @endphp to your computer" 
              class="p-6 block space-y-2 justify-start rounded-lg bg-gray-50 hover:bg-gray-100 transition ease-in-out duration-150">
                <h5 class="text-lg leading-6 font-medium text-brand-dark mb-0">@php the_title(); @endphp</h5>
                <p class="text-sm">@php echo get_the_excerpt(); @endphp</p>
                <div class="flex-grow h-1"></div>
                <p class="bg-brand rounded-full inline-block p-2 px-4 mt-auto text-sm leading-5 font-medium text-white align-bottom">
                  <span class="flex items-center py-1">
                    <i height="20" width="20" class="mr-2" data-feather="download"></i>
                    @if ($file)
                      Download Report
                    @else 
                      View Report
                    @endif
                  </span>
                </p>
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