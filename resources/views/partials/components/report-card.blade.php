<article class="aspect-ratio aspect-ratio--4x3 md:aspect-ratio--1x1 lg:aspect-ratio--4x3 bg-gray-800 text-white">
  <div class="absolute inset-0 flex flex-col px-8 pb-8 space-y-8 z-20">
    <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl">
      <h2><span class="text-white">@php echo $title @endphp</span></h2>
    </div>
    <div class="flex-grow"></div>
    <div>@include('partials.buttons.button-link',[ 
      'title' => $linkTitle,
      'url'   => $linkUrl,
    ])</div>
  </div>
  @include('components.background-image',[
    'imageid'   => get_post_thumbnail_id(),
    'imagesize' => 'large',
    'opacity'   => 'opacity-25'
  ])
</article>