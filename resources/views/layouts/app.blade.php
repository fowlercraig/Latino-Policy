@include('partials.header')

<div class="container max-w-full">
  <main class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')
