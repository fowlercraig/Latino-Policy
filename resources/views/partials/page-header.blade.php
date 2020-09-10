@if(has_post_thumbnail())

<header class="-mt-16 bg-brand-darker relative z-10">
  <div class="h-header relative">
    @include('components.background-image',[
      'imageid' => get_post_thumbnail_id(),
      'imagesize'  => 'large'
    ])
  </div>
  <div class="page-header py-10 relative">
    <div class="container max-w-full relative z-10">
      <h1 class="uppercase font-display text-display-xxl text-white">@php(the_title())</h1>
    </div>
  </div>
</header>

@else

<header class="pt-16 -mt-16 bg-brand-darker">
  <div class="page-header py-10 relative">
    <div class="container max-w-full relative z-10">
      <h1 class="uppercase font-display text-display-xxl text-white">@php(the_title())</h1>
    </div>
  </div>
</header>

@endif