@global($post)
@if(is_search())
  <div class="md:pt-12 md:-mt-12 bg-brand-dark">
    <div class="page-header text-white py-4 md:py-4">
      <div class="container">
        <div class="max-w-4xl">
          <h1 class="tracking-tight font-bold text-4xl md:text-6xl xl:text-7xl font-primary-a uppercase">{!! $title !!}</h1>
        </div>
      </div>
    </div>
  </div>
@else
  <div class="md:pt-12 md:-mt-12 bg-brand-dark">
    @include('partials.page-header-image')
    <div class="page-header text-white py-4 md:py-4">
      <div class="container space-y-4 lg:space-y-0 lg:grid lg:grid-cols-2 gap-4 md:gap-8">
        <div>
          <h1 class="tracking-tight font-bold text-4xl md:text-6xl xl:text-7xl font-primary-a uppercase">{!! $title !!}</h1>
          @include('partials.page-header-child')
        </div>
        <div class="opacity-90 text-sm sm:text-base">
          @excerpt
        </div>
      </div>
    </div>
    @if( is_post_type_archive('people') || $post->post_parent == '3709' || is_page(3709) )
      @include('partials.page-header-people')
    @endif
  </div>
@endif