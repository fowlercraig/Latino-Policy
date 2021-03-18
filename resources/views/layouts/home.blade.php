@global($cookie)
@if($cookie)
  @set($modalState, 'false')
@else
  @set($modalState, 'true')
@endif

<div x-data="{ subscribe: {{ $modalState }}, menu: null }" @keydown.window.escape="menu = false" @mouseleave="setTimeout(() => menu = false, 100)">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

    <main id="main" class="max-w-none main text-gray-600">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif

  @include('partials.footer')
</div>
