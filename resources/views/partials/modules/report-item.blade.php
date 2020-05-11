<div class="aspect-ratio aspect-ratio--8x5 bg-black">
  <div class="p-6 text-white w-2/3 space-y-4">
    <div class="text-white">
      <?php 
        $posts = get_field('issue');
        if( $posts ): ?>
        <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
          <?php echo get_the_title( $p->ID ); ?>
        <?php endforeach; ?>
        <?php endif; 
        //var_dump($issue);
        $terms = get_the_terms( $post->ID, 'resource_type' );
        if ($terms) {
          foreach($terms as $term) {
            echo $term->name;
          } 
        }
      ?>
    </div>
    <div class="text-xl font-bold leading-7"><?php the_title(); ?></div>
  </div>
</div>
