<a class="block group" href="@php echo $item['link']['url']; @endphp">
  <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
    <div class="col-span-3 lg:order-last">
      <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100">
        <?php the_post_thumbnail( 'large', array( 'class' => 'group-hover:scale-105 transform transition ease duration-1000 object-cover transition ease duration-300 w-full h-full' ) ); ?>
      </div>
    </div>
    <div class="col-span-2 space-y-2">
      <div class="text-white font-medium">
        <span class="text-brand-light">Event Date →</span>
        <?php the_field('event_date'); ?>
      </div>
      <h2 class="text-2xl leading-8 font-bold tracking-tight text-white sm:text-3xl sm:leading-9">
        @php the_title(); @endphp
      </h2>
      <div class="text-brand-lighter">@php the_excerpt(); @endphp</div>
      <div class="h-px"></div>
      <div><p class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</p></div>
    </div>
  </div>
</a>