@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header bg-brand-darker relative">
  <div class="relative z-10">
    <div class="grid grid-cols-5">
      <div class="container col-span-5  @if ( has_post_thumbnail() ) lg:col-span-2 @endif py-6 md:py-10 space-y-4">
        @if (is_tax( 'issue' ))
        <a
          title="Opens @php echo $parent_title @endphp in same window"
          href="@php echo $parent_url @endphp"  
          class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
          &larr; Back to Research Library
        </a>
        @endif
        @if ($parent)
        <a
          title="Opens @php echo $parent_title @endphp in same window"
          href="@php echo $parent_url @endphp"  
          class="parent-link inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
          &larr; Back to @php echo $parent_title @endphp
        </a>
        @endif
        <h1 class="font-display uppercase font-extrabold text-white tracking-tight leading-10 sm:leading-19 text-6xl sm:text-8xl mb-0">{!! App::title() !!}</h1>
        @if ( '' !== get_post()->post_content )
        @if (!is_archive() || !is_search() )
        <div class="font-medium xl:font-normal text-gray-300 -mt-1 max-w-3xl xl:text-xl">
          @php the_content() @endphp
        </div>
        @endif
        @endif
      </div>
      @if (!is_archive())
      @if ( has_post_thumbnail() )
      <div class="col-span-5 lg:col-span-3 order-first lg:order-last">
        <div class="h-48 sm:min-h-84 sm:h-full bg-brand-darker relative">
          <div class="absolute inset-0">
            <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover transition ease duration-300 w-full h-full' ) ); ?>
          </div>
        </div>
      </div>
      @endif
      @endif
    </div>
  </div>
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</div>