@global($cookie)
@if($cookie)
  @set($modalState, 'false')
@else
  @set($modalState, 'true')
@endif

<div class="container" x-data="{ subscribe: {{ $modalState }} }">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

    <main id="main" class="py-8 prose max-w-none main">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif

  @include('partials.footer')
</div>
