@extract([
  'url'     => $url ?? false,
  'desc'    => $desc ?? false,
  'title'   => $title ?? false,
])

<section class="space-y-2">
  <div class="grid grid-cols-2 gap-4 md:gap-6 xl:gap-10">
    <div class="prose md:prose-2xl">
      <h2 class="text-brand-dark">{{ $title }}</h2>
    </div>
    <div class="prose">
      {{ $desc }}
    </div>
  </div>
  @if($url)
    @include('components.button-animated-top',[
      'cta'     => 'Read More', 
      'classes' => '', 
      'url'     => $url
    ])
  @endif
</section>