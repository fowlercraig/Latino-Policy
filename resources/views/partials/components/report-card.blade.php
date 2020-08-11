<article class="aspect-ratio aspect-ratio--1x1 md:aspect-ratio--4x3 lg:aspect-ratio--1x1 xl:aspect-ratio--4x3 bg-gray-800 text-white">
  <div class="absolute inset-0 flex flex-col px-8 pb-8 space-y-8 z-20">
    <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
    <div class="sm:prose-lg prose md:prose-lg lg:prose-lg xl:prose-xl">
      <h2><span class="text-white">@php echo $title @endphp</span></h2>
    </div>
    <div class="flex-grow"></div>
    <div>@include('partials.buttons.button-link',['title' => $link])</div>
  </div>
  @include('components.background-image',[
    'image' => get_post_thumbnail_id(),
    'size'  => 'large',
    'opacity'  => 'opacity-25'
  ])
</article>