@extract([
  'url'     => $url ?? false,
  'desc'    => $desc ?? false,
  'title'   => $title ?? false,
  'cta'     => $cta ?? false,
])

<section class="space-y-2">
  <div class="@if($desc) grid grid-cols-2 gap-4 md:gap-6 xl:gap-10 @endif">
    <div class="prose md:prose-2xl">
      <h2 class="text-brand-dark">{!! $title !!}</h2>
    </div>
    @if($desc)
      <div class="prose">
        {!! $desc !!}
      </div>
    @endif
  </div>
  @if($url)
    @include('components.button-animated',[
      'classes' => '', 
      'url'     => $url
    ])
  @endif
</section>