<article @php post_class() @endphp>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-20">
    <div class="text-gray-500 pt-10">
      <div class="md:grid md:grid-cols-2 gap-10">
        <?php the_post_thumbnail( 'large', array( 'class' => 'w-full' ) ); ?>
        <div class="order-first space-y-4">
          <header class="space-y-2">
            <h1 class="text-5xl font-display uppercase font-medium leading-7 text-brand-darker sm:text-7xl sm:leading-16 tracking-tight mb-0">
              {!! get_the_title() !!}
            </h1>
            <a
              href="/people/<?php the_field('role'); ?>"
              target="Opens <?php the_field('role'); ?> in the same window" 
              class="inline-block bg-brand hover:bg-brand-dark transition ease duration-200 text-white font-medium font-brand uppercase tracking-wider px-2 py-1">
              <?php the_field('role'); ?>
            </a>
          </header>
          <div class="entry-content">
            @php the_content() @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
