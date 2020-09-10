@php
  $menuLocations = get_nav_menu_locations();
  $menuID = $menuLocations['primary_navigation'];
  $primaryNav = wp_get_nav_menu_items($menuID);
  global $cookie;
@endphp

<header 
  @click.away="open:false" 
  x-data="{open:true}" 
  class="banner inset-x-0 z-40 @if(is_front_page()) absolute @else relative @endif flex items-center sm:block">

  <div class="py-6">
    <div class="container flex justify-between items-center max-w-full">
      <a class="brand flex" href="{{ home_url('/') }}">
        @if (is_front_page())
        <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')">
        @else
        <img alt="{{ get_bloginfo('name', 'display') }}" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
        @endif
      </a>
      <nav class="nav-primary hidden sm:block">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex items-center space-x-2 text-white', 'echo' => false]) !!}
        @endif
      </nav>
    </div>
  </div>

  @include('partials.header-nav')

  @if(!$cookie)
    @include('components.modal-subscribe')
  @endif

</header>
