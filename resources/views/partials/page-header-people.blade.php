<div class="h-12 bg-brand text-white mb-12 flex items-center">
  <div class="container space-x-4 text-sm font-medium">
    @if (has_nav_menu('people_navigation'))
      {!! wp_nav_menu(['theme_location' => 'people_navigation', 'menu_class' => 'nav flex items-center space-x-4', 'echo' => false]) !!}
    @endif
  </div>
</div>