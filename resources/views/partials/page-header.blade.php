<div class="md:pt-12 md:-mt-12 bg-brand-dark">
  @include('partials.page-header-image')
  <div class="page-header text-white py-2 md:py-4">
    <div class="container lg:grid lg:grid-cols-2 gap-4 md:gap-8">
      <div>
        <h1 class="tracking-tight font-bold text-6xl xl:text-7xl font-primary-a uppercase">{!! $title !!}</h1>
        @include('partials.page-header-child')
      </div>
      <div class="opacity-90">
        @excerpt
      </div>
    </div>
  </div>
  @if( is_archive('people') || is_tax('role') )
    @include('partials.page-header-people')
  @endif
</div>