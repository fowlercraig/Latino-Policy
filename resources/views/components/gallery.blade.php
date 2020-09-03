@if(get_field('gallery'))
<header class="flex justify-between items-center">
  <div class="prose">
    <h3>Gallery</h3>
  </div>
  <div id="carousel-controls" class="flex controls items-center space-x-1 outline-none">
    <button data-controls="prev" class="prev w-8 h-8 rounded-full flex items-center justify-center bg-brand transition ease duration-300 text-white">
      <i data-feather="chevron-left"></i>
      <span class="sr-only">Previous</span>
    </button>
    <button data-controls="next" class="next w-8 h-8 rounded-full flex items-center justify-center bg-brand transition ease duration-300 text-white">
      <i data-feather="chevron-right"></i>
      <span class="sr-only">Next</span>
    </button>
  </div>
</header>
<div id="gallery">
  @php $count = 1; $images = get_field('gallery') @endphp
  @foreach ($images as $image)
  @if($count%8 == 1)<div class="slide"><div class="my-gallery grid grid-cols-4 gap-1 mb-6" itemscope itemtype="http://schema.org/ImageGallery">@endif
  <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
    <a class="aspect-ratio aspect-ratio--1x1 bg-red-500 block relative" href="@php echo $image['url'] @endphp" itemprop="contentUrl" data-size="@php echo $image['width'] @endphpx@php echo $image['height'] @endphp">
      <div class="absolute inset-0">
        <img class="h-full w-full object-cover" src="@php echo $image['sizes']['medium'] @endphp" itemprop="thumbnail" alt="Image description" />
      </div>
    </a>
    @if($image['caption'])
    <figcaption class="sr-only" itemprop="caption description">@php echo $image['caption'] @endphp</figcaption>
    @endif
  </figure>
@if($count%8 == 0)</div></div>@endif
  @php $count++; @endphp
  @endforeach
</div>
@endif