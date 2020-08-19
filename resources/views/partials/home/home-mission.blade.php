@php 
  $items = get_field('mission');
  $link = 'Learn More';
  $imageid = $items['image']['id'];
@endphp

<section class="bg-brand-darker pt-12">
  <div class="flex flex-wrap lg:items-center">
    <div class="w-full lg:w-2/5 container relative z-40 py-4">
      <h2 class="font-bold uppercase text-white font-display text-display-xxs sm:text-display-sm lg:text-display-lg xl:text-display-xl lg:-mr-64">@php echo $items['title'] @endphp</h2>
      <div class="prose prose-sm sm:prose lg:prose-lg">
        <div class="text-brand-lighter">@php echo $items['description'] @endphp</div>
      </div>
      @include('partials.buttons.button-link',['title' => $link, 'textColor' => 'text-white'])
    </div>
    <div class="w-full lg:w-3/5 order-first lg:order-last">
      <div class="aspect-ratio aspect-ratio--8x5 bg-black">
        @include('components.background-image',[
          'imagesize' => 'large',
          'opacity'   => 'opacity-75'
        ])
      </div>
    </div>
  </div>
</section>