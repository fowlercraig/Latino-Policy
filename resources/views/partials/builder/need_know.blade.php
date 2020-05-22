<div class="relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
    <div class="space-y-4 lg:space-y-4">
      <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0"><?php the_sub_field('title'); ?></h2> 
      <div class="text-base text-gray-500 lg:w-1/2"><?php the_sub_field('description'); ?></div> 
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
      <?php $items = get_sub_field('items'); ?>
      <?php foreach ($items as $item): ?>
      <div class="bg-brand-lightest flex items-center space-x-6 pr-6">
        <div class="flex flex-none h-32 w-24 lg:w-48 bg-brand-darker items-center justify-center">
          <div class="tracking-tight space-y-1">
            <div class="text-white font-display text-4xl lg:text-7xl leading-6 lg:leading-15 text-center"><?php echo $item['value']; ?></div>
            <div class="text-white text-center font-brand uppercase leading-tight tracking-wider text-sm opacity-75 font-medium"><?php echo $item['label']; ?></div>
          </div>
        </div>
        <div class="text-brand-darker font-medium text-sm sm:text-base">
          <?php echo $item['description']; ?>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="opacity-25 md:w-2/5 absolute top-0 left-0 pointer-events-none z-0 lg:-mt-20">
    <img class="opacity-50 w-full" src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
  </div>
</div>