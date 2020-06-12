<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body <?php body_class('text-gray-500 transition duration-500') ?>>
    @if (is_front_page())
    <div x-data="{ open: false }" @click.away="open = false">
    @else
    <div x-data="{ open: false }" @click.away="open = false">
    @endif
      <a class="sr-only" href="#main" title="Skips to content">Skip to Content</a>
      @php do_action('get_header') @endphp
      @include('partials.header')
      @if (is_front_page())
      <div class="wrap" role="document">
      @else
      <div class="wrap" role="document">
      @endif
        <div class="content">
          <main id="main" class="main transition-fade">
            @yield('content')
          </main>
        </div>
      </div>
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>
