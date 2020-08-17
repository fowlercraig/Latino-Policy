<div class="flex flex-wrap items-center even:flex-row-reverse">
  <div class="lg:w-2/5 prose lg:prose-lg xl:prose-xl">
    <h2>@php echo $title @endphp</h2>
    <p>@php echo $desc @endphp</p>
  </div>
  <div class="lg:w-3/5">
    <div class="aspect-ratio aspect-ratio--8x5 bg-gray-800">
      @include('components.background-image',[
        'imageid'   => $image,
        'imagesize' => 'large',
      ])
    </div>
  </div>
</div>
