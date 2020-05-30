<div id="parent-<?php the_ID(); ?>" class="parent-page hover" data-aos="fade-up">
  <div class="transform transition duration-300 ease group hover:-translate-y-1 hover:scale-105 hover:shadow-xl">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="block space-y-2">
      <div>
        <div class="aspect-ratio aspect-ratio--1x1 md:aspect-ratio--16x9 lg:aspect-ratio--7x5 bg-gray-900 overflow-hidden">
          <div class="absolute inset-0 p-4 sm:p-8 space-y-2 sm:space-y-6 z-20">
            <div class="flex inline-flex text-xs sm:text-lg rounded overflow-hidden space-x-1">
              <?php if(get_the_terms(get_the_ID(), 'resource')): ?>
              <span class="text-white font-medium"><?php echo get_the_terms(get_the_ID(), 'resource')[0]->name; ?></span>
              <span class="text-white font-medium">→</span>
              <?php endif; ?>
              <?php if(get_the_terms(get_the_ID(), 'issue')): ?>
              <span class="text-white font-medium"><?php echo get_the_terms(get_the_ID(), 'issue')[0]->name; ?></span>
              <?php endif; ?>
            </div>
            <h2 class="text-2xl sm:text-3xl leading-7 sm:leading-10 font-bold tracking-tight text-white">
              <span class="bg-transparent group-hover:bg-brand-darker transition ease duration-150 py-1"><?php the_title(); ?></span>
            </h2>
            <div><a href="@php echo $item['link']['url'] @endphp" class="{{ $learnmore }}">Learn More</a></div>
          </div>
          <?php the_post_thumbnail( 'large', array( 'class' => 'opacity-25 group-hover:opacity-50 object-cover transition ease duration-300 w-full h-full' ) ); ?>
        </div>
      </div>
    </a>
  </div>
</div>