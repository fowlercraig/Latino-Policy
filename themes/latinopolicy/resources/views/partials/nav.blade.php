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