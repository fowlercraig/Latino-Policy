<article class="aspect-ratio aspect-ratio--3x4 sm:aspect-ratio--1x1 md:aspect-ratio--7x5 xl:aspect-ratio--16x9 bg-gray-900">
  <div class="absolute inset-0 flex items-end pb-6 lg:pb-24 z-40">
    <div class="container max-w-none">
      <div class="space-y-4">
        <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
        <div class="prose prose-sm sm:prose lg:prose-lg">
          <h1><span class="text-white">@php echo $title @endphp</span></h1>
          <p class="text-white">@php echo $excerpt @endphp</p>
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
