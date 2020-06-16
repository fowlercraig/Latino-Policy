<div class="year-@php the_field('graduation_year') @endphp fellow flex flex-col space-y-1 justify-start rounded-lg w-1/2 lg:w-1/4 p-6">
  <div class="aspect-ratio aspect-ratio--3x4 bg-gray-300 relative">
    <div class="absolute inset-0">
      <?php the_post_thumbnail( 'medium', array( 'class' => 'object-cover object-top w-full h-full' ) ); ?>
    </div>
  </div>
  @if ( $post->post_parent == 630 )
  @php $terms = get_the_terms( get_the_ID(), 'issue' ); @endphp
  <div class="h-1"></div>
    @if($terms)
    <div class="text-sm leading-5 font-medium text-brand">
      <span class="">@php echo $terms[0]->name; @endphp</span>
    </div>
    @endif
  @else
  <div class="h-1"></div>
  @endif
  <h5 class="text-lg leading-6 font-medium text-brand-darker mb-0">@php the_title(); @endphp</h5>
  <p class="text-sm hidden sm:block">
    <?php the_field('title'); ?>  
  </p>
  <div class="flex-grow h-2"></div>
  @if ( $post->post_parent != 630 )
  <p class="mt-auto text-sm leading-5 font-medium text-brand">Learn more →</p>
  @endif
</div>