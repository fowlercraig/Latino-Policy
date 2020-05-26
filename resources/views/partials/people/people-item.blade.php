<div class="w-full sm:px-5 mb-10">
  <div class="flex flex-wrap md:items-center sm:-mx-3">
    <div class="w-full sm:w-1/3 sm:px-3">
      <div class="aspect-ratio aspect-ratio--6x4 bg-black"></div>
    </div>
    <div class="w-full sm:w-2/3 sm:px-3">
      <div class="space-y-4">
        
        <?php if(get_the_terms(get_the_ID(), 'issue')): ?>
        <ul>
          <?php foreach (get_the_terms(get_the_ID(), 'issue') as $cat): ?>
          <li class="inline-block text-sm"><?php echo $cat->name; ?>,</li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <div class="text-xl sm:text-2xl font-bold leading-7 sm:leading-8 tracking-tight">
          <a class="text-brand-darker" href="<?php echo get_permalink( $tasks->ID ); ?>" title="Opens @php echo get_the_title( $tasks->ID ); @endphp Page in Same Window">
            <?php echo get_the_title( $tasks->ID ); ?>
          </a>
        </div>
        <a
          title="Opens @php the_title() @endphp in the same window"  
          href="@php the_permalink() @endphp" 
          class="inline-block text-base text-brand font-bold border-t-2 border-b-0 border-brand pt-1">Learn More</a> 
      </div>
    </div>
  </div>
</div>
