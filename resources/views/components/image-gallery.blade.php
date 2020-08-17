@if(get_field('gallery'))
@php $images = get_field('gallery') @endphp

<div id="gallery">
  @foreach ($images as $image)
  <div>
    <div class="aspect-ratio aspect-ratio--4x3 relative">
      <a class="absolute inset-0 block" href="@php echo $image['url'] @endphp">
        <img class="w-full h-full object-cover" src="@php echo $image['sizes']['medium'] @endphp" />
      </a>
    </div>
  </div>
  @endforeach
</div>

@endif