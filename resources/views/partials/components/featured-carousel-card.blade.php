<article class="aspect-ratio aspect-ratio--4x6 sm:aspect-ratio--1x1 md:aspect-ratio--1x1 xl:aspect-ratio--16x9 bg-gray-900">
  <div class="absolute inset-0 flex items-end pb-6 pb-24 z-40">
    <div class="container max-w-none">
      <div class="space-y-4">
        <div>@include('partials.components.ui-eyebrow',['title' => $item['subtitle']])</div>
        <div class="prose prose-sm sm:prose md:prose-lg">
          <h1><span class="text-white">@php echo $title @endphp</span></h1>
          <p class="text-white hidden md:block">@php echo $excerpt @endphp</p>
        </div>
        <div>@include('partials.buttons.button-link',['title' => $link, 'textColor' => 'text-white'])</div>
      </div>
    </div>
  </div>
  @include('components.background-image',[
    'imagesize' => 'large',
    'opacity'   => 'opacity-75'
  ])
</article>
