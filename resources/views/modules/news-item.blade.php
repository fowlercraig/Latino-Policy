<a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="-m-6 -mt-8 p-6 flex flex-col space-y-2 justify-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
  <div class="aspect-ratio aspect-ratio--1x1 bg-gray-300">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'opacity-95 object-cover transition ease duration-300 w-full h-full' ) ); ?>
  </div>
  <div class="h-1"></div>
  <h5 class="text-lg leading-6 font-medium text-brand-dark mb-0">@php the_title(); @endphp</h5>
  <div class="flex-grow h-2"></div>
  <p class="mt-auto text-sm leading-5 font-medium text-brand align-bottom">Learn more →</p>
</a>