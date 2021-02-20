@set($menuLocations,get_nav_menu_locations())
@set($menuID,$menuLocations['social_navigation'])
@set($primaryNav,wp_get_nav_menu_items($menuID))

<footer class="content-info py-4 md:py-6 xl:py-10 text-gray-500">
  <div class="container flex">
    <div class="space-y-4 w-1/3 flex-none">
      <p class="font-bold font-primary-a text-brand-dark uppercase tracking-tighter text-3xl leading-7">
        {{ bloginfo('description') }}
      </p>
      @if (has_nav_menu('social_navigation'))
        <ul class="flex items-center space-x-4 text-brand">
          @foreach($primaryNav as $navItem)
            <li>
              <a class="text-2xl" target="_blank" href="{{ $navItem->url }}" title="{{ $navItem->title }}">
                <i class="fab fa-{{ strtolower($navItem->title) }}"></i>
                <span class="sr-only">{{ $navItem->title }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>
    <div class="w-full border-l pl-10 grid md:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6 xl:gap-10">
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </div>
</footer>
