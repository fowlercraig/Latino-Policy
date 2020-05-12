<h3 class="font-bold text-xl">Related</h3>

<?php
  $tasks = get_posts(array(
    'post_type' => array('post', 'archive', 'press'),
    'meta_query' => array(
      array(
        'key' => 'people', // name of custom field
        'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
        'compare' => 'LIKE'
      )
    )
  ));
?>

<?php if( $tasks ): ?>
  <div class="w-full md:w-3/4 sm:-mx-5">
    <?php foreach( $tasks as $tasks ):?>
    @include('partials.people.people-item')
    <?php endforeach; ?>
  </div>
<?php endif; ?>


<?php /*
<?php if( $tasks ): ?>
  <ul class="flex">
    <?php foreach( $tasks as $tasks ):?>
    <li class="w-1/3">
      <div class="aspect-ratio aspect-ratio--16x9 bg-primary mb-4"></div>
      <h2 class="mb-3 text-2xl font-bold">
        <a href="<?php echo get_permalink( $tasks->ID ); ?>">
          <?php echo get_the_title( $tasks->ID ); ?>
        </a>
      </h2>
      <div class="text-grey-darker text-sm">
        @php echo get_the_excerpt($tasks->ID) @endphp
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
*/ ?>