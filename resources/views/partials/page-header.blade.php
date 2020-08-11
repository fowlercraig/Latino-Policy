<div class="page-header py-12 relative">
  <div class="prose lg:prose-lg xl:prose-xl relative z-10">
    <h1 class="uppercase text-white">{!! $title !!}</h1>
  </div>
  @include('components.background-image',[
    'image' => get_post_thumbnail_id(),
    'size'  => 'large'
  ])
</div>
