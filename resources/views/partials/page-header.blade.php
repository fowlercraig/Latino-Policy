<div class="page-header lg:py-32 relative">
  <div class="container max-w-full prose lg:prose-lg xl:prose-xl relative z-10">
    <h1 class="uppercase"><span class="text-white">{!! $title !!}</span></h1>
  </div>
  @include('components.background-image',[
    'imageid' => get_post_thumbnail_id(),
    'imagesize'  => 'large'
  ])
</div>
