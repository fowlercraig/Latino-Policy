@global($cookie)
@if($cookie)
  @set($modalState, 'false')
@else
  @set($modalState, 'true')
@endif

<div x-data="{ subscribe: {{ $modalState }} }">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

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
