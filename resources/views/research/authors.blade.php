@php
  $posts = get_field('people');
@endphp

@php if( $posts ): @endphp
<div class="flex space-x-4">
  @php foreach( $posts as $people ): @endphp
  <a href="@php echo get_permalink( $people->ID ); @endphp" title="Authors Name" class="inline-flex items-center space-x-2 group">
    <div class="h-10 w-10 bg-gray-100 rounded-full overflow-hidden group-hover:scale-105 transition transform ease duration-300">
      <img 
        alt="@php echo get_the_title( $people->ID ); @endphp" 
        src="@php echo get_the_post_thumbnail_url( $people->ID,'thumbnail' ); @endphp" 
        class="object-cover w-full h-full">
    </div>
    <div>
      <p class="text-brand-dark font-medium text-sm">@php echo get_the_title( $people->ID ); @endphp</p>
      <p class="text-gray-500 font-medium text-xs">@php echo get_the_terms($people->ID, 'role')[0]->name; @endphp</p>
    </div>
  </a>
  @php endforeach; wp_reset_postdata(); @endphp
</div>
@php endif; @endphp