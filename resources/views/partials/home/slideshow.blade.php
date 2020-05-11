<?php 
  $items = get_field('hero_carousel');
?>

<div class="relative bg-brand-darker">
  <div class="carousels" data-carousel-options='{"controls":false,"autoAdvance":false,"pagination":false}'>
    @php foreach($items as $item): @endphp
    <div class="carousel-slide sm:pt-80 sm:pb-16 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-8">
        <div class="max-w-md space-y-3 md:space-y-4 text-white relative z-20">
          <a href="#" class="py-1 px-2 bg-brand font-brand inline-block uppercase text-sm text-white font-semibold tracking-wider">Category</a>
          <div class="h2 font-bold text-2xl leading-7 md:text-5xl md:leading-12">
            <?php echo $item['headline']; ?>
          </div>
          <div class="text-lg text-white-75">
            <?php echo $item['description']; ?>
          </div>
          <a href="#" class="py-2 border-t-2 border-brand inline-block font-brand uppercase text-sm tracking-wider font-semibold">Learn More</a>
        </div>
      </div>
      <div class="absolute top-0 inset-0 z-10">
        <img class="object-cover h-48 w-full h-full" src='@php echo $item["image"]["url"]; @endphp'>
      </div>
    </div>
    @php endforeach; @endphp
  </div>
  <div class="absolute inset-x-0 left-0 bottom-0 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="controls flex space-x-px">
        <button class="h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-left"></i></button>
        <button class="h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>