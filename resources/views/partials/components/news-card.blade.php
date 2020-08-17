<article class="space-y-3 flex flex-col">
  <div class="aspect-ratio aspect-ratio--8x5 bg-gray-800">
    <span class="absolute bottom-0 z-10">
      @include('partials.components.ui-eyebrow',['title' => $cat])
    </span>
    @include('components.background-image',[
      'imageid'   => get_post_thumbnail_id(),
      'imagesize' => 'large',
      'opacity'   => 'opacity-75'
    ])
  </div>
  <h4 class="font-medium lg:text-lg">
    <a href="@php echo $link @endphp">@php echo $title @endphp</a>
  </h4>
  <div class="flex-grow"></div>
  @include('partials.buttons.button-link',['title' => 'Learn More'])
</article>