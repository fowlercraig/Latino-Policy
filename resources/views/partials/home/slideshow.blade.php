<?php 
  $items = get_field('hero_carousel');
?>

<div class="relative bg-brand-darker">
  <div 
    class="carousel" 
    data-carousel-options='{"autoAdvance":false,"pagination":false,"controls":{"container":".controls","previous":".prev","next":".next"}}'>
    @php foreach($items as $item): @endphp
    <div class="carousel-slide pt-80 pb-16 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 pb-8">
        <div class="max-w-md space-y-3 md:space-y-4 text-white relative z-20">
          <span class="py-1 px-2 bg-brand font-brand inline-block uppercase text-sm text-white font-semibold tracking-wider">
            @php echo $item['subheadline']; @endphp
          </span>
          <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10 mb-0">
            <?php echo $item['headline']; ?>
          </h2>
          <div class="text-lg text-white-75">
            <?php echo $item['description']; ?>
          </div>
          <a 
            href="<?php echo $item['url']; ?>"
            target="Opens carousel item in same window"
            class="inline-block text-base font-bold border-t-2 border-b-0 border-brand pt-1 text-white">Learn More</a> 
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
      <div class="controls">
        <div class="flex">
          <button class="prev h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-left"></i></button>
          <button class="next h-10 w-10 md:h-16 md:w-16 flex items-center justify-center text-white bg-brand hover:bg-brand-dark transition transition ease-in-out duration-150 hover:scale-110"><i data-feather="chevron-right"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>