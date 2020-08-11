<article class="aspect-ratio aspect-ratio--8x5 bg-gray-800 text-white">
  <div class="absolute inset-0 flex flex-col px-8 pb-8 space-y-8">
    <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
    <div>@php echo $title @endphp</div>
    <div class="flex-grow"></div>
    <div>@include('partials.buttons.button-link',['title' => $link])</div>
  </div>
</article>