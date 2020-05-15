<div class="aspect-ratio aspect-ratio--16x9 lg:aspect-ratio--8x5 bg-black relative group" data-aos="fade">
  <div class="p-10 text-white space-y-4 relative z-10">
    <div class="absolute top-0 text-white bg-brand py-sm px-md uppercase text-sm font-brand tracking-wider font-medium inline-block">
      <?php 
        $posts = get_field('issue');
        if( $posts ):
          foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
            echo get_the_title( $p->ID );
          endforeach;
        endif;
      ?> 
    </div>
    <div class="text-3xl font-bold leading-9"><?php the_title(); ?></div>
    <a href="<?php the_permalink(); ?>" class="py-2 border-t-2 border-brand inline-block font-brand uppercase text-sm tracking-wider font-semibold">Learn More</a>
  </div>
  <div class="absolute inset-0 opacity-50 group-hover:opacity-75 transition duration-300">
    <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
  </div>
</div>
