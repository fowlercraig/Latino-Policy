@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header md:-mt-16">
  @if (!is_archive() && !is_search() )
  @if ( has_post_thumbnail() )
  <div class="bg-gray-900 h-64 md:h-header text-center rellax z-10 overflow-hidden">
    <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover object-top transition ease duration-300 w-full h-full' ) ); ?>
  </div>
  <div class="w-1/2 h-4 bg-brand-darker -mt-4 relative z-20 hidden lg:block"></div>
  @endif
  @endif
  @if ( has_post_thumbnail() )
  <div class="py-6 pb-6 bg-brand-darker relative -mt-1">
  @else
  <div class="py-6 pt-24 pb-6 bg-brand-darker relative -mt-1">
  @endif
    <div class="container relative z-10">
      <div class="grid lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-12">
        <div class="relative space-y-2">
          <h1 class="uppercase font-display font-bold text-white tracking-tight leading-16 xl:leading-20 text-7xl xl:text-8xl mb-0">{!! App::title() !!}</h1>
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
            class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
            &larr; Back to @php echo $parent_title @endphp
          </a>
          @endif
        </div>
        @php if (!is_archive() && !is_page(696) && !is_search()): @endphp
        <div class="sm:text-xl lg:text-lg xl:text-xl text-gray-300 -mt-1">
          @php the_content() @endphp
        </div>
        @php endif; @endphp
      </div>
    </div>
    <div class="absolute bg-black-25 w-1/2 top-0 h-full right-0 hidden lg:block"></div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </div>
</div>
