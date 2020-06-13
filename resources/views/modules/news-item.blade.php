@php
  if(get_field('publication_link')) {
    $link = get_field('publication_link')['url'];
    $target = '_blank';
    $title = 'Opens' . get_the_title() . 'in new window';
  } else {
    $link = get_the_permalink();
    $target = '_self';
    $title = 'Opens' . get_the_title() . 'in same window';
  }
@endphp
<a 
  target="@php echo $target @endphp" 
  href="@php echo $link @endphp" 
  title="@php echo $title @endphp" 
  class="sm:-m-6 sm:-mt-8 sm:p-6 flex flex-col justify-start rounded-lg sm:hover:bg-gray-50 transition ease-in-out duration-150">
  <span class="sr-only"><?php the_title(); ?></span>
  <div class="relative aspect-ratio lg:aspect-ratio--4x3">
    <div class="absolute inset-0">
      @if(has_post_thumbnail())
      <?php the_post_thumbnail( 'medium', array( 'class' => 'object-cover object-top transition ease duration-300 w-full h-full' ) ); ?>
      @else
      <div class="aspect-ratio aspect-ratio--16x9 bg-gray-900"></div>
      @endif
    </div>
    @if(get_the_terms(get_the_ID(), 'issue'))
    <div class="absolute bottom-0">
      <span class="text-sm inline-block font-medium bg-brand-dark px-1 py-px text-white">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</span> 
    </div>
    @endif
  </div>
  <div class="h-1"></div>
  <h5 class="text-lg leading-6 font-medium text-brand-dark mb-0">
    @php the_title(); @endphp
  </h5>
  <div class="flex-grow h-2"></div>
  <p class="mt-auto text-sm leading-5 font-medium text-brand align-bottom">Read More</p>
</a>