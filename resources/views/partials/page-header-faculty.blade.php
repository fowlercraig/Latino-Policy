<div class="page-header bg-brand-darker relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative pt-16 -mt-16">
    <div class="relative z-10">
      @php 
        $parent = $post->post_parent; 
        $parent_url = get_the_permalink($parent);
        $parent_title = get_the_title($parent);
      @endphp
      @if ($parent)
      <a 
        class="inline-block uppercase font-brand tracking-wider bg-brand-dark text-white font-medium py-1 px-3 absolute top-0" 
        href="@php echo $parent_url @endphp" 
        title="Opens @php echo $parent_title @endphp in same window">
        @php echo $parent_title @endphp
      </a>
      @endif
      <div class="space-y-4 md:space-y-0 md:grid md:grid-cols-2 md:gap-8 pt-xl pb-lg lg:py-xl lg:pb-lg">
        <h2 class="text-5xl font-display uppercase font-medium leading-7 text-white sm:text-7xl sm:leading-16 tracking-tight mb-0">
          <a href="/people">People</a>
        </h2>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>