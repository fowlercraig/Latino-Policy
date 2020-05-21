<div class="pt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
    <div>
      <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0"><?php the_sub_field('title'); ?></h2> 
      <div class="text-base text-gray-500 lg:w-1/2"><?php the_sub_field('description'); ?></div> 
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <?php $items = get_sub_field('items'); ?>
      <?php foreach ($items as $item): ?>
      <div class="bg-brand-lightest flex items-center space-x-6 pr-6">
        <div class="flex flex-none h-32 w-48 bg-brand-darker items-center justify-center">
          <div class="tracking-tight space-y-1">
            <div class="text-white font-display text-7xl leading-15 text-center"><?php echo $item['value']; ?></div>
            <div class="text-white text-center font-brand uppercase tracking-wider text-sm opacity-75 font-medium"><?php echo $item['label']; ?></div>
          </div>
        </div>
        <div class="text-brand-darker font-medium">
          <?php echo $item['description']; ?>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>