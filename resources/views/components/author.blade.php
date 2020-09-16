<a href="#" class="inline-flex items-center space-x-1">
  <div class="h-8 w-8 rounded-full bg-gray-800 relative overflow-scroll">
    @include('components.background-image',[
      'imageid'   => $image,
      'imagesize' => 'thumbnail'
    ])
  </div>
  <div class="leading-tight">
    <div class="text-sm font-medium">@php echo $title @endphp</div>
    <div class="text-xs font-medium opacity-50">@php echo $role @endphp</div>
  </div>
</a>
