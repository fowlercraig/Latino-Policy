@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header bg-brand-darker relative md:-mt-16 pt-12">
  <div class="relative z-10">
    <div class="block">
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
        <h1 class="font-display uppercase font-bold text-white tracking-tight leading-13 sm:leading-19 text-6xl sm:text-8xl mb-0">{!! App::title() !!}</h1>
      </div>
    </div>
  </div>
  <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
    <img class="w-1/2" alt="Pattern" src="@asset('images/halftone.png')">
  </div>
</div>