<div class="page-header relative z-0">
  <div class="bg-brand-darker relative z-20 -mt-16 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
      <div class="flex flex-wrap">
        <div class="w-2/5 sm:py-xl relative">
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
          <h2 class="text-2xl font-display uppercase font-medium leading-7 text-white sm:text-7xl sm:leading-16 tracking-tight">
            People
          </h2>
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>
