<div class="bg-brand-darker pt-20 mt-20 relative" data-aos="fade-up">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10  mb-0">Upcoming Events</h2> 
  </div>

  @php 
    $ids = get_sub_field('events', false, false);
    $args = array (
      'post_type'       => array('research', 'press', 'events'),
      'posts_per_page'  => -1,
      'order'           => 'ASC',
      'post__in'        => $ids,
      'post_status'     => 'any',
      'orderby'         => 'post__in',
    );
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query($args);
    while ($wp_query->have_posts()) : $wp_query->the_post();
  @endphp 

  <div class="relative overflow-hidden z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-30">
      <div class="flex flex-wrap md:items-center lg:-mx-lg space-y-5 lg:space-y-0 relative z-10">
        <div class="w-full lg:w-3/5 w-8/12 @if(!get_sub_field('align')): lg:order-last @endif lg:px-lg">
          <div class="aspect-ratio aspect-ratio--6x4 bg-gray-400 relative">
            <a
              href="<?php the_permalink( ); ?>" title="<?php the_title(); ?>" 
              class="absolute inset-0 flex items-center justify-center text-white">
              <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
            </a>
          </div>
        </div>
        <div class="w-full lg:w-2/5 w-4/12 lg:px-lg space-y-4 lg:space-y-4">
          <h4 class="text-sm uppercase tracking-wide md:tracking-wider font-medium text-brand font-brand font-semibold">
            <span class="bg-brand text-white p-2"><?php the_field('publish_date'); ?></span>
          </h4>
          <h3 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
            <?php the_title(); ?>
          </h3>
          <div class="text-white-75">
            <?php the_excerpt() ?>
          </div>
          <a 
            href="<?php the_permalink( ); ?>"
            title="<?php the_title(); ?>"
            class="inline-block text-base font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</a> 
        </div>
      </div>
    </div>
  </div>

  @php 
    endwhile;
    $wp_query = null;
    $wp_query = $temp;
    wp_reset_postdata();
  @endphp 

  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img 
      alt="Pattern"
      src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>

</div>