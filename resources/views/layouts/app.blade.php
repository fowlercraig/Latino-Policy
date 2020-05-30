<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @if (is_front_page())
    <div class="wrap" role="document">
    @else
    <div class="wrap container" role="document">
    @endif
      <div class="content">
        <main class="main text-gray-500 transition-fade">
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
