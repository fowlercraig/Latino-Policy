<?php
  $tasks = get_posts(array(
    'post_type' => array('post', 'archive', 'press'),
    'meta_query' => array(
      array(
        'key' => 'people',
        'value' => '"' . get_the_ID() . '"', 
        'compare' => 'LIKE'
      )
    )
  ));
?>

@if( $tasks )
<div class="max-w-7xl mx-auto px-4 sm:px-6 pt-20">
  <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-10">
    More from <?php the_title(); ?>
  </h2> 
  <div class="w-full md:w-3/4 sm:-mx-5">
    @php foreach( $tasks as $tasks ): @endphp
    @include('partials.people.people-item')
    @php endforeach; @endphp
  </div>
</div>
@endif