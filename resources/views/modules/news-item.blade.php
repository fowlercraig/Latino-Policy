<a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="sm:-m-6 sm:-mt-8 sm:p-6 flex flex-col space-y-2 justify-start rounded-lg sm:hover:bg-gray-50 transition ease-in-out duration-150">
  <?php the_post_thumbnail( 'medium', array( 'class' => 'opacity-95 object-cover transition ease duration-300 w-full h-full' ) ); ?>
  <div class="h-1"></div>
  <h5 class="text-lg leading-6 font-medium text-brand-dark mb-0">
    @if(get_the_terms(get_the_ID(), 'issue'))
    <span class="text-gray-400">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp → </span> 
    @endif
    @php the_title(); @endphp
  </h5>
  <div class="flex-grow h-2"></div>
  <p class="mt-auto text-sm leading-5 font-medium text-brand align-bottom">Read More</p>
</a>