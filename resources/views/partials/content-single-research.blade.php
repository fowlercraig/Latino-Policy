<article @php post_class() @endphp>
  <header class="relative overflow-hidden bg-brand-darker pt-24 -mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-30">
      <div class="flex flex-wrap  lg:-mx-lg space-y-5 lg:space-y-0 relative z-10">
        
        <div class="w-full lg:w-3/5 w-8/12 lg:px-lg order-last">
          <div class="relative shadow-xl">
            <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
          </div>
        </div>
        
        <div class="w-full lg:w-2/5 w-4/12 lg:px-lg space-y-4 lg:space-y-4">
          
          <h4 class="inline-block bg-brand p-2 text-sm uppercase tracking-wide md:tracking-wider font-medium text-white font-brand font-semibold">
            <?php if(get_the_terms(get_the_ID(), 'issue')): ?>
            <?php foreach (get_the_terms(get_the_ID(), 'issue') as $cat): ?>
            <span><?php echo $cat->name; ?></span>
            <?php endforeach; ?>
            <?php endif; ?>
          </h4>

          <div></div>
          
          <h3 class="text-3xl leading-9 font-display uppercase font-bold tracking-tight text-white sm:text-5xl sm:leading-12">
            {!! App::title() !!}
          </h3>

          <div class="text-white-75">
            @php the_excerpt(); @endphp
          </div>

        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img 
        alt="Pattern"
        src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </header>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-30 pt-10 md:pt-20 grid grid-cols-3 gap-10">
    <div class="entry-content text-gray-600 col-span-2">
      <?php the_content(); ?>
    </div>
  </div>

</article>
