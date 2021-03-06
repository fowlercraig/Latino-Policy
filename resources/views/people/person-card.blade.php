<a data-aos="fade-up" href="@php echo get_permalink( $p->ID ); @endphp" title="@php the_title(); @endphp" class="flex flex-col space-y-1 justify-start rounded-lg transition ease-in-out duration-150">
  <div class="aspect-ratio aspect-ratio--3x4 bg-gray-300 relative">
    <div class="absolute inset-0">
      <?php echo get_the_post_thumbnail( $p->ID, 'medium', array( 'class' => 'object-cover object-top w-full h-full' ) ); ?>
    </div>
  </div>
  @if ( $post->post_parent == 630 )
  @php $terms = get_the_terms( $p->ID, 'issue' ); @endphp
  <div class="h-1"></div>
    @if($terms)
    <div class="text-sm leading-5 font-medium text-brand">
      <span class="">@php echo $terms[0]->name; @endphp</span>
    </div>
    @endif
  @else
  <div class="h-1"></div>
  @endif
  <h5 class="text-lg leading-6 font-medium text-brand-darker mb-0">@php echo get_the_title( $p->ID ); @endphp</h5>
  <p class="text-sm hidden sm:block"><?php echo get_field('title', $p->ID); ?></p>
  @if( get_field('association', $p->ID) )
  <p class="text-sm hidden sm:block"><?php echo get_field('association', $p->ID); ?></p>
  @endif
  <div class="flex-grow h-2"></div>
  @if ( $post->post_parent != 630 )
  <p class="mt-auto text-sm leading-5 font-medium text-brand">Learn more →</p>
  @endif
</a>