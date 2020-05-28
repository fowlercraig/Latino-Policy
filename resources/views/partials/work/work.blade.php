<div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10 pt-10 relative z-20">

<?php

  $args = array (

    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
  $thumb_url = $thumb_url_array[0];
  //var_dump($thumb_url);
?>

<div class="w-full relative group" data-aos="fade-up">
  <div class="bg-brand-lightest group-hover:bg-brand-darker md:items-center transition transform ease duration-300 hover:shadow-xl hover:-translate-y-2 overflow-hidden">
    <div class="rounded flex flex-wrap items-center relative z-20">
      <div class="w-full md:w-1/2 lg:w-1/5 mb-3 sm:mb-0 p-md pr-0">
        <div 
          data-background-options='{"source":"<?php echo $thumb_url; ?>"}'
          class="aspect-ratio aspect-ratio--1x1 bg-brand-darker background rounded shadow relative">
            <div class="absolute inset-0 overflow-hidden p-6">
              @php $image = get_field('icon'); @endphp
              <img class="object-fit h-full mx-auto" src="@php echo $image['url']; @endphp" alt="@php echo $image['alt']; @endphp">
            </div>
          </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-4/5 p-5 md:px-10 text-sm md:text-base space-y-2">
        <h2 class="text-brand-darker font-bold mb-0 md:text-2xl lg:text-3xl xl:text-4xl group-hover:text-white transition ease duration-400 tracking-tight leading-tight">
          @php the_title(); @endphp
        </h2>
        <div class="text-gray-600 group-hover:text-white-75 text-sm md:text-base lg:text-lg"><?php the_field('excerpt'); ?></div>
        <div></div>
        <a 
          class="inline-block font-brand text-brand-dark uppercase font-medium tracking-wider text-sm border-t-2 border-brand-dark pt-2 group-hover:border-white group-hover:text-white transition duration-300 ease" 
          href="<?php the_permalink(); ?>" title="Opens @php the_title(); @endphp in the same window">Learn More</a>
      </div>
    </div>
    <div class="opacity-25 group-hover:opacity-25 absolute top-0 left-0 pointer-events-none">
      <img alt="Pattern" src="@asset('images/Pattern-white.png')" srcset="@asset('images/Pattern-white.png') 1x, @asset('images/Pattern-white@2x.png') 2x, @asset('images/Pattern-white@3x.png') 3x">
    </div>
  </div>
</div>

<?php
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>

</div>