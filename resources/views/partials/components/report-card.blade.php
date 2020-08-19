<article class="aspect-ratio aspect-ratio--1x1 sm:aspect-ratio--4x3 md:aspect-ratio--16x9 lg:aspect-ratio--4x3 xl:aspect-ratio--16x9 bg-gray-800 text-white">
  <div class="absolute inset-0 flex flex-col px-4 pb-4 md:px-8 md:pb-8 space-y-4 md:space-y-8 z-20">
    <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
    <h2 class="text-white uppercase font-display text-display-xxs md:text-display-xs">@php echo $title @endphp</span></h2>
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