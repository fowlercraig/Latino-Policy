<div class="w-full">
  <div class="flex flex-wrap items-center sm:-mx-3">
    <div class="w-full sm:w-1/3 sm:px-3 mb-3 sm:mb-0">
      <div class="relative">
        <div class="aspect-ratio aspect-ratio--6x4 bg-black relative">
          <div class="absolute inset-0">
            <?php the_post_thumbnail( 'medium', array( 'class' => 'object-cover w-full h-full' ) ); ?>
          </div>
        </div>
        @php $terms = get_the_terms( $post->ID, 'resource_type' ); @endphp
        @php if ($terms) : foreach($terms as $term) : @endphp
        <div class="absolute text-sm font-bold bg-white bottom-0 py-1 px-2 text-brand">
          @php echo $term->name; @endphp
        </div>
        @php endforeach; endif @endphp
      </div>
    </div>
    <div class="w-full sm:w-2/3 sm:px-3 space-y-2">

      <?php if(get_the_terms(get_the_ID(), 'issue')): ?>
      <ul class="uppercase font-brand text-sm tracking-wider space-x-3 font-medium text-brand">
        <?php foreach (get_the_terms(get_the_ID(), 'issue') as $cat): ?>
        <li class="inline-block"><?php echo $cat->name; ?></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>

      <h2 class="font-bold text-lg sm:text-lg md:text-2xl text-brand-darker leading-7 relative">
        <a class="z-20 relative border-b-4 border-transparent hover:border-brand-lighter transition ease duration-150" href="@php the_permalink(); @endphp" title="Opens @php the_title(); @endphp Page in Same Window">@php the_title(); @endphp</a>
      </h2>
      <div></div>
      <a
        title="Opens {!! get_the_title() !!} in same window" 
        class="inline-block text-sm font-bold border-t-2 border-b-0 border-brand pt-1 text-brand" 
        href="@php the_permalink() @endphp">Read More
      </a>
    </div>
  </div>
</div>