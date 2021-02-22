@hasfield('info')
  <div class="container">
    <ul class="space-y-8 md:space-y-12 xl:space-y-20">
      @set($i, 1)
      @fields('info')
        @include('components.divider')
        <div class="lg:grid lg:gap-6 xl:gap-10 lg:grid-cols-2 prose md:prose-lg lg:prose-2xl max-w-none sm:max-w-none md:max-w-none">
          <h2 class="text-brand-dark">@sub('title')</h2>
          <div class="text-base">@sub('description')</div>
        </div>
        @php $i++ @endphp
      @endfields
    </ul>
  </div>
@endfield