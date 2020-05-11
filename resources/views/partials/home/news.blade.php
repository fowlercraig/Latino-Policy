<div class="container">
  <div class="flex flex-wrap py-2 md:py-10 -mx-5">

    <div class="w-full md:mb-5 px-5">
      <h2 class="font-bold text-3xl mb-0">News & Updates</h2>
    </div>

  @php

    $args = array(
      'posts_per_page' => -1,
      'paged'          => $paged,
      'meta_key'       => 'section',
      'meta_value'     => 'news'
    );

    $parent = new WP_Query( $args );
    if ( $parent->have_posts() ) :
    while ( $parent->have_posts() ) : $parent->the_post(); @endphp

    <div class="lg:w-1/3 px-5">
      <div class="h-px bg-grey-lighter"></div>
      <h4 class="my-3">Category</h4>
      <div class="aspect-ratio aspect-ratio--7x5 bg-black">
        @php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          if(get_post_thumbnail_id()) {
            $thumb_url = $thumb_url_array[0];
          } else {
            $thumb_url = '';
          }
        @endphp
        <div class="absolute inset-0 background" data-background-options='{"source":"@php echo $thumb_url @endphp"}'></div>
      </div>
      <h3 class="my-3"><a href="">@php the_title(); @endphp</a></h3>
      <div class="text-grey-darker text-sm mb-3">@php the_excerpt(); @endphp</div>
      <a class="border-b border-red pb-1 text-sm text-red" href="@php the_permalink(); @endphp">Read More</a>
    </div>

  @php
    endwhile; 
    endif; 
    wp_reset_postdata(); 
  @endphp

  </div>
</div>