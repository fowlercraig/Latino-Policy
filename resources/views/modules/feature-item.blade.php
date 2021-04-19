@if( get_field('publication_link')['url'] )
  @php $link = get_field('publication_link')['url']; @endphp
@else
  @php $link = get_the_permalink() @endphp
@endif

<a class="block group" href="{!! $link !!}" target="blank">
  <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
    <div class="col-span-3 lg:order-last">
      <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100 relative overflow-hidden">
        <div class="absolute inset-0">
          <?php the_post_thumbnail( 'large', array( 'class' => 'group-hover:scale-105 transform transition ease duration-1000 object-cover transition ease duration-300 w-full h-full' ) ); ?>
        </div>
      </div>
    </div>
    <div class="col-span-2 space-y-2">
      <h2 class="text-2xl leading-8 font-bold tracking-tight text-white sm:text-3xl sm:leading-9">
        @php the_title(); @endphp
      </h2>
      <div class="text-brand-lighter">@php the_excerpt(); @endphp</div>
      <div class="h-px"></div>
      <div><p class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</p></div>
    </div>
  </div>
</a>