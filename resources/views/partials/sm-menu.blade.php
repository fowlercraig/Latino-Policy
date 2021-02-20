<div class="relative" x-data="{ mobile: false }">
  <button @click="mobile = !mobile" class="block md:hidden bg-gray-100 rounded h-10 w-10 flex items-center justify-center">
    <div :class="{ 'hidden': mobile, 'block': !mobile }"><i stroke-width="1px" data-feather="menu"></i></div>
    <div :class="{ 'block': mobile, 'hidden': !mobile }"><i stroke-width="1px" data-feather="x"></i></div>
  </button>
  <div x-show="mobile" class="absolute top-full right-0 -mr-4 w-screen pt-px z-30">
    <div class="container">
      <div class="bg-white text-sm rounded shadow-xl px-4 py-3">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav text-lg space-y-1', 'echo' => false]) !!}
        @endif
      </div>
    </div>
  </div>
</div>