<header class="banner py-6 shadow-sm">
  <div class="container flex justify-between items-center max-w-full">
    <a class="brand" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex items-center space-x-2', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</header>
