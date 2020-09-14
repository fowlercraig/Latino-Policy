@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header md:-mt-16">
  <div class="py-6 pt-24 pb-6 bg-brand-darker relative -mt-1">
    <div class="container relative z-10">
      <div class="grid lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-12">
        <div class="relative space-y-2">
          <h1 class="uppercase font-display font-bold text-white tracking-tight leading-16 xl:leading-20 text-7xl xl:text-8xl mb-0">{!! App::title() !!}</h1>
          @if ($parent)
          <a
            title="Opens @php echo $parent_title @endphp in same window"
            href="@php echo $parent_url @endphp"  
            class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
            &larr; Back to @php echo $parent_title @endphp
          </a>
          @endif
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
    </div>
  </div>
</div>
