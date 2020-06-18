<a 
  data-aos="fade-up" 
  href="@php the_permalink(); @endphp" 
  title="@php the_title(); @endphp" 
  class="sm:py-4 transition ease-in-out duration-150">
  @php $terms = get_the_terms( get_the_ID(), 'issue' ); @endphp
  <div class="h-1"></div>
  <div class="text-sm leading-5 font-medium text-brand">
    <span class="">@php echo the_field('date_published') @endphp</span>
  </div>
  <div class="h-1"></div>
  <h5 class="text-lg sm:text-xl lg:text-lg xl:text-xl leading-6 font-medium text-brand-dark mb-0">@php the_title(); @endphp</h5>
  <p class="text-sm hidden sm:block"><?php the_field('title'); ?></p>
  @if ( $post->post_parent != 630 )
  <div class="h-2"></div>
  <p class="mt-auto text-sm leading-5 font-medium text-brand">Learn more →</p>
  @endif
</a>