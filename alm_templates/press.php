<?php
  $issues = get_the_terms(get_the_ID(), 'issue');
  $types  = get_the_terms(get_the_ID(), 'resource');
?>
<div class="grid grid-cols-2 gap-10 <?php if (!has_post_thumbnail()) { ?> no-img<?php } ?>">
  <a class="block group" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <div class="aspect-w-7 aspect-h-5 relative bg-brand-darker">
      <div class="absolute inset-0 group-hover:opacity-60 transition ease duration-300">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover' ) ); }?>
      </div>
    </div>
  </a>
  <div class="prose max-w-full space-y-2">
    <?php if($types && $issues): ?>
      <div class="bg-brand h-8 px-3 inline-flex items-center text-white space-x-1 text-xs font-medium">
        <?php if($types): ?><span class="flex-none"><?php echo $types[0]->name; ?></span><?php endif; ?>
        <span>→</span>
        <?php if($issues): ?><span class="flex-none"><?php echo $issues[0]->name; ?></span><?php endif; ?>
      </div>
    <?php endif; ?>
    <h3>
      <a class="block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <span class="font-bold"><?php the_title(); ?></span>
      </a>
    </h3>
    <div class="leading-snug"><?php the_excerpt(); ?></div>
    <p class="text-sm font-medium space-x-1">
      <a class="text-brand underline" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <span>Read More</span>
      </a>
      <span>|</span>
      <span>
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
          <?php echo get_the_date(); ?>
        </time>
      </span>
    </p>
  </div>
</div>