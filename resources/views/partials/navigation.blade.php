<div class="container">
  <div class="h-12 flex items-center justify-between">
    <ul class="nav-primary flex items-center">
      @if ($navigation)
        @foreach ($navigation as $item)
          <li class="group" @mouseenter="menu=true " @mouseleave="menu = null">
            <a class="first:pl-0 px-3 lg:px-4 block flex space-x-1 items-center relative hover:underline" href="{!! $item->url !!}">
              <span class="text-sm font-karbon text-nav uppercase tracking-wider">{!! $item->label!!}</span> 
              @if ($item->children)
                <i width="16px" height="16px" class="text-gray-300" data-feather="chevron-down"></i>
              @endif
            </a>
            @if ($item->children)
              <div class="bg-white p-6 absolute text-black border-b inset-x-0 hidden invisible opacity-0 transition ease duration-500 group-hover:block group-hover:visible group-hover:opacity-100">
                @include('components.menu-content')
              </div>
            @endif
          </li>
        @endforeach
      @endif
    </ul>
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
</div>
