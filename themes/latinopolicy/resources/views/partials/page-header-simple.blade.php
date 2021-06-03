@global($post)
<div class="md:pt-12 md:-mt-12 bg-brand-dark">
  @include('partials.page-header-image')
  <div class="page-header text-white py-4 md:py-4">
    <div class="container space-y-4 lg:space-y-0">
      <div>
        <h1 class="tracking-tight font-bold text-4xl md:text-6xl xl:text-7xl font-primary-a uppercase">{!! $title !!}</h1>
        @include('partials.page-header-child')
      </div>
    </div>
  </div>
</div>