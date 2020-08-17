@php
  $posts = get_field('people');
  if ( is_singular( 'research' ) || is_singular( 'event' ) || is_singular( 'press' ) ) {
    $name = 'text-white';
    $role = 'text-white-50';
  } else {
    $name = 'text-brand-darker';
    $role = 'text-gray-500';
  }
@endphp

@php if( $posts ): @endphp
<div class="grid grid-cols-2 gap-4 @php echo $spacing @endphp @php echo $textColor @endphp @php echo $padding @endphp">
@php foreach( $posts as $people ): @endphp
@include('components.author',[
  'url'     => get_permalink( $people->ID ),
  'image'   => get_post_thumbnail_id( $people->ID ),
  'title'   => get_the_title( $people->ID ),
  'role'    => get_the_terms($people->ID, 'role')[0]->name
])
@php endforeach; wp_reset_postdata(); @endphp
</div>
@php endif; @endphp