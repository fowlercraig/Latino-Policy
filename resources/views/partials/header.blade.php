<header 
  class="banner relative z-40" x-data="{ menu: null }" @keydown.window.escape="menu = false" @mouseleave="menu = false"
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
        @if(is_front_page())
          <img :class="{ 'hidden': menu, 'block': !menu }" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_wht.svg')" alt="{!! $siteName !!}">
          <img :class="{ 'block': menu, 'hidden': !menu }" class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')" alt="{!! $siteName !!}">
        @else
          <img class="h-10 sm:h-16 w-auto" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')" alt="{!! $siteName !!}">
        @endif
      </a>
      @include('partials.sm-menu')
      <div class="hidden md:block space-y-2 text-right">
        <div class="text-sm font-medium tracking-tight flex items-center space-x-2 text-gray-600">
          <a class="hover:underline" href="/research">Research Library</a>
          <a class="hover:underline" href="/press">Press Archive</a>
          <span class="opacity-30">|</span>
          <a @click.prevent="subscribe = true" class="hover:underline" href="#">Subscribe</a>
        </div>
        <button class="p-2 px-4 text-sm lg:text-base bg-brand text-white rounded font-medium">Make a Donation</button>
      </div>
    </div>
  </div>

  <div class="hidden md:block relative">
    <div class="container">
      <div class="h-12 flex items-center justify-between">
        <nav class="nav-primary flex items-center space-x-3 lg:space-x-4 text-sm font-primary-c uppercase tracking-wider">
          @include('components.menu-item',['title'=>'About','link'=>'/about','children'=>false])
          @include('components.menu-item',['title'=>'Work','link'=>'/work','children'=>true])
          @include('components.menu-item',['title'=>'Issues','link'=>'/issues','children'=>true])
          @include('components.menu-item',['title'=>'Voting Rights Project','link'=>'/votingrights','children'=>true])
          @include('components.menu-item',['title'=>'People','link'=>'/people','children'=>true])
          @include('components.menu-item',['title'=>'Newsroom','link'=>'/newsroom','children'=>false])
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
            @include('components.menu-content',['id'=> 3481, 'title'=>'Work'])
            @include('components.menu-content',['id'=> 3479, 'title'=>'Issues'])
            @include('components.menu-content',['id'=> 3483, 'title'=>'Voting Rights Project'])
            @include('components.menu-content',['id'=> 12, 'title'=>'People'])
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
