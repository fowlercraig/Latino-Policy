<div class=" group transform transition ease duration-300 hover:-translate-y-1 hover:shadow-xl hover:scale-105">
  <a
    target="Opens <?php the_title(); ?> in the same window"
    href="<?php the_permalink(); ?>"
    class="block aspect-ratio aspect-ratio--16x9 lg:aspect-ratio--8x5 bg-black relative" data-aos="fade-up">
    <div class="p-10 text-white space-y-2 relative z-10">
      <div class="absolute top-0 text-white bg-brand py-sm px-md uppercase text-sm font-brand tracking-wider font-medium inline-block">
        <div class="space-x-2">
          <?php if(get_the_terms(get_the_ID(), 'issue')): ?>
            <?php foreach (get_the_terms(get_the_ID(), 'issue') as $cat): ?>
            <span><?php echo $cat->name; ?></span>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div></div>
      <?php if(get_the_terms(get_the_ID(), 'resource_type')): ?>
      <?php foreach (get_the_terms(get_the_ID(), 'resource_type') as $cat): ?>
      <span class="font-bold inline-block"><?php echo $cat->name; ?></span>
      <?php endforeach; ?>
      <?php endif; ?>
      <div class="text-2xl sm:text-3xl font-bold leading-7 sm:leading-9 tracking-tight"><?php the_title(); ?></div>
      <div></div>
      <span class="inline-block text-base font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</span> 
    </div>
    <div class="absolute inset-0 opacity-50 group-hover:opacity-75 transition duration-300">
      <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
    </div>
  </a>
</div>