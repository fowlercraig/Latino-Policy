@hasfield('content')
  <div class="container">
    <ul class="space-y-8 md:space-y-12 xl:space-y-20">
      @set($i, 1)
      @fields('content')
        @include('components.image-text')
        @php $i++ @endphp
      @endfields
    </ul>
  </div>
@endfield