<header 
  class="banner relative z-40"
  :class="{ 'bg-white text-gray-700': menu, 'bg-transparent text-white': !menu }"
  >
  <div class="container">
    <div 
      class="h-16 md:h-24 md:border-b border-opacity-25 flex justify-between items-center"
      @if(is_front_page())
        :class="{ 'border-gray-400': menu, 'border-white': !menu }"
      @else
        :class="{ 'border-gray-400': menu, 'border-gray-400': !menu }"
      @endif
      >
      <a class="brand" href="{{ home_url('/') }}">
        <div :class="{ 'text-black md:text-black': menu, 'text-black md:text-white': !menu }">
          @svg('images/lppi_logo.svg', 'h-10 md:h-16 w-auto', ['aria-label' => $siteName])
        </div>
      </a>
      @include('partials.sm-menu')
      <div class="hidden md:block space-y-2 text-right">
        <div 
          class="text-sm font-medium tracking-tight flex items-center space-x-2"
          @if(is_front_page())
            :class="{ 'text-gray-600': menu, 'text-white': !menu }"
          @else
            :class="{ 'text-gray-600': menu, 'text-gray-600': !menu }"
          @endif
          >
          <a class="hover:underline" href="/press-archive">Press Archive</a>
          <a class="hover:underline" href="/research">Research Library</a>
          <span class="opacity-30">|</span>
          <button @click.prevent="subscribe = true" class="hover:underline">Subscribe</button>
        </div>
        <div x-data="{ donateMenu:false }" class="relative">
          @include('components/donate-menu')
        </div>
      </div>
    </div>
  </div>

  <div id="header" class="hidden md:block relative w-full transition-all duration-200 ease">
    @include('partials.navigation')
  </div>
</header>

<script>
  var h = document.getElementById("header");
  var stuck = false;
  var stickPoint = getDistance();

  function getDistance() {
    var topDist = h.offsetTop;
    return topDist;
  }

  window.onscroll = function(e) {
    var distance = getDistance() - window.pageYOffset;
    var offset = window.pageYOffset;
    if ( (distance <= 0) && !stuck) {
      h.style.position = 'fixed';
      h.style.top = '0px';
      h.classList.add('bg-white', 'text-gray-600', 'shadow');
      stuck = true;
    } else if (stuck && (offset <= stickPoint)){
      h.style.position = 'relative';
      h.classList.remove('bg-white', 'text-gray-600', 'shadow');
      stuck = false;
    }
  }
</script>