<header class="banner flex items-center justify-between py-6 border-b border-gray-100">

  <div class="flex items-center space-x-3">
    <a class="brand" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>
    <a @click.prevent="subscribe = true" class="hover:underline" href="#">Subscribe</a>
  </div>

  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex items-center space-x-3', 'echo' => false]) !!}
    @endif
  </nav>

</header>
