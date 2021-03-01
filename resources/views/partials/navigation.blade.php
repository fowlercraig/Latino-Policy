<div class="container">
  <div class="h-12 flex items-center justify-between">
    <nav class="nav-primary flex items-center space-x-3 lg:space-x-4 text-sm font-primary-c uppercase tracking-wider">
      @if ($navigation)
        @foreach ($navigation as $item)
          <a @mouseenter="menu !== '{!! $item->label !!}' ? menu = '{!! $item->label !!}' : menu = null " class="flex space-x-1 items-center relative hover:underline" href="{!! $item->url !!}">
            <span>{!! $item->label!!}</span> 
            <i width="16px" height="16px" class="text-gray-300" data-feather="chevron-down"></i>
          </a>
        @endforeach
      @endif
    </nav>
    <nav class="nav-primary flex items-center space-x-3 lg:space-x-4 text-sm">
      @include('partials.searchform')
      @if (has_nav_menu('social_navigation'))
        <ul class="flex items-center space-x-4 text-white">
          @set($menuLocations,get_nav_menu_locations())
          @set($menuID,$menuLocations['social_navigation'])
          @set($primaryNav,wp_get_nav_menu_items($menuID))
          @foreach($primaryNav as $navItem)
            <li>
              <a target="_blank" href="{{ $navItem->url }}" title="{{ $navItem->title }}">
                <i class="fab fa-{{ strtolower($navItem->title) }}"></i>
                <span class="sr-only">{{ $navItem->title }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </nav>
  </div>
  <div class="absolute inset-x-0">
    <div class="bg-white shadow-xl">
      <div class="container">
        @if ($navigation)
          @foreach ($navigation as $item)
            @if ($item->children)
              @include('components.menu-dropdown')
            @endif
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
