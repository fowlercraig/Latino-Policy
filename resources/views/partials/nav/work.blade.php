<!-- Solutions menu -->
<div 
  x-description="'Solutions' flyout menu, show/hide based on flyout menu state." 
  x-show="solutionsMenuOpen" 
  x-transition:enter="transition ease-out duration-200" 
  x-transition:enter-start="opacity-0" 
  x-transition:enter-end="opacity-100" 
  x-transition:leave="transition ease-in duration-150" 
  x-transition:leave-start="opacity-100" 
  x-transition:leave-end="opacity-0" 
  class="hidden md:block absolute inset-x-0 transform shadow-lg" 
  style="display: none;"
>
  <div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-6 pb-0">
      <a href="/work" class="text-4xl font-bold font-extrabold text-brand-darker border-b-4 border-brand-lighter">Work</a>
    </div>
    <div class="max-w-7xl mx-auto grid row-gap-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:pb-8 lg:grid-cols-4 lg:px-4 lg:pb-12 xl:pb-16">


      @php 
        $args = array (
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => 18,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
        );
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();
      @endphp 

      <a href="<?php the_permalink(); ?>" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
        <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
          <div class="flex-shrink-0">
            <div class="w-32 lg:w-full rounded relative">
              @php $image = get_field('icon'); @endphp
              <img class="mx-auto" src="@php echo $image['url']; @endphp" alt="@php echo $image['alt']; @endphp">
              <div class="aspect-ratio aspect-ratio--1x1 lg:aspect-ratio--16x9 bg-brand-darker rounded"></div>
            </div>
          </div>
          <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
            <div class="space-y-1">
              <p class="text-lg leading-6 font-bold text-gray-900">
                @php the_title(); @endphp
              </p>
              <p class="text-sm leading-5 text-gray-500">
                @php the_field('excerpt'); @endphp
              </p>
            </div>
            <p class="text-sm leading-5 font-medium text-brand">
              Learn more →
            </p>
          </div>
        </div>
      </a>

      @php 
        endwhile;
        $wp_query = null;
        $wp_query = $temp;  // Reset
        wp_reset_postdata();
      @endphp 

    </div>
  </div>
</div>