<a 
  data-aos="fade-up" 
  href="@php the_permalink(); @endphp" 
  title="@php the_title(); @endphp" 
  class="sm:py-4 border-b border-gray-100 flex flex-col justify-start transition ease-in-out duration-150">
  @php $terms = get_the_terms( get_the_ID(), 'issue' ); @endphp
  <div class="h-1"></div>
  @if($terms)
  <div class="text-sm leading-5 font-medium text-brand">
    <span class="">@php echo $terms[0]->name; @endphp</span>
  </div>
  @endif
  <div class="h-1"></div>
  <h5 class="text-lg leading-6 font-medium text-brand-dark mb-0">@php the_title(); @endphp</h5>
  <p class="text-sm hidden sm:block"><?php the_field('title'); ?></p>
  @if ( $post->post_parent != 630 )
  <p class="mt-auto text-sm leading-5 font-medium text-brand">Learn more →</p>
  @endif
</a>