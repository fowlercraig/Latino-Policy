<div x-data="{ subscribe: false, menu: null }" @keydown.window.escape="menu = false">  

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

  <main id="main" class="max-w-none main text-gray-600 space-y-5 md:space-y-12 xl:space-y-20">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

  @include('partials.footer')
</div>
