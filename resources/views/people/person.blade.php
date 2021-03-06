<a data-aos="fade-up" href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="sm:-m-6 sm:-mt-8 sm:p-6 flex flex-col space-y-1 justify-start rounded-lg transition ease-in-out duration-150">
  <div class="aspect-ratio aspect-ratio--3x4 bg-gray-300 relative">
    <div class="absolute inset-0">
      <?php the_post_thumbnail( 'medium', array( 'class' => 'object-cover object-top w-full h-full' ) ); ?>
    </div>
  </div>
  @if ( $post->post_parent == 630 )
  @php $terms = get_the_terms( get_the_ID(), 'issue' ); @endphp
  @php $id = get_the_ID() @endphp
  
  @php $post_categories = get_post_primary_category($id, 'issue');  @endphp
  @php $primary_category = $post_categories['primary_category']; @endphp
  
  <div class="h-1"></div>
    @if($terms)
    <div class="text-sm leading-5 font-medium text-brand">
      <span class="">@php echo $post_categories['primary_category']->name  @endphp</span>
    </div>
    @endif
  @else
  <div class="h-1"></div>
  @endif
  <h5 class="text-lg leading-6 font-medium text-brand-darker mb-0">@php the_title(); @endphp</h5>
  <p class="text-sm hidden sm:block"><?php the_field('title'); ?></p>
  @if( has_term('', 'advisor') )
  <p class="text-sm hidden sm:block"><?php the_field('association'); ?></p>
  @endif
  <div class="flex-grow h-2"></div>
  @if ( $post->post_parent != 630 )
  <p class="mt-auto text-sm leading-5 font-medium text-brand">Learn more →</p>
  @endif
</a>