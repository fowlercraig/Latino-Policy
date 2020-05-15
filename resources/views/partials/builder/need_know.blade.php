<div class="pt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
    <div>
      <h2 class="text-2xl text-blue-800 font-bold">What you need to know</h2> 
      <a class="text-base font-medium text-gray-500 border-b pb-1">View all {!! App::title() !!} Reports</a> 
      <?php 
        global $post;
        $post_slug = $post->post_name;
      ?>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <div class="bg-brand-lightest flex items-center space-x-6 pr-6">
        <div class="flex flex-none h-32 w-48 bg-brand-darker items-center justify-center">
          <div class="tracking-tight space-y-1">
            <div class="text-white font-display text-7xl leading-15">10</div>
            <div class="text-white text-center font-brand uppercase tracking-wider text-base font-medium">Million</div>
          </div>
        </div>
        <div class="text-brand-darker">
          An estimated 7 million Californians live in 
          a health professional shortage area. 
          70% are people of color
        </div>
      </div>
      <div class="bg-brand-lightest flex items-center space-x-6 pr-6">
        <div class="flex flex-none h-32 w-48 bg-brand-darker items-center justify-center">
          <div class="tracking-tight space-y-1">
            <div class="text-white font-display text-7xl leading-15">500</div>
            <div class="text-white text-center font-brand uppercase tracking-wider text-base font-medium">Years</div>
          </div>
        </div>
        <div class="text-brand-darker">
          An estimated 7 million Californians live in 
          a health professional shortage area. 
          70% are people of color
        </div>
      </div>
  </div>
</div>