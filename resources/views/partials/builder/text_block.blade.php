<div class="max-w-7xl mx-auto px-4 sm:px-6 relative pt-20" data-aos="fade">
  <div class="border-4 md:border-8 border-brand-darker p-4 md:p-10 bg-white">
    <div class="space-y-5 lg:space-y-0 relative z-10">
      <div class="space-y-4 lg:space-y-4">
        @if (get_sub_field('subtitle'))
        <h4 class="text-base text-brand font-bold border-b-2 border-b-2 border-brand pb-1 inline-block capitalize mb-0">
          @php the_sub_field('subtitle') @endphp
        </h4>
        @endif
        <h3 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">
          @if (get_sub_field('title'))
          @php the_sub_field('title') @endphp
          @else
          There is no American Agenda without the Latino Agenda
          @endif
        </h3>
        <div class="text-gray-500">
          @if (get_sub_field('description'))
          @php the_sub_field('description') @endphp
          @else
          Maecenas augue metus, tempor quis nibh egestas, accumsan posuere magna. 
          Ut ornare, justo ut rhoncus ullamcorper, ipsum lorem fermentum nisi, vel 
          tincidunt leo turpis at mauris. Etiam non magna ante. 
          @endif
        </div>
        @if (get_sub_field('page_link'))
        <a
          target="Opens <?php the_sub_field('page_link'); ?> in the same window" 
          href="<?php the_sub_field('page_link'); ?>" 
          class="py-2 border-t-2 border-b-0 text-brand-darker border-brand inline-block font-brand uppercase text-sm tracking-wider font-semibold">Learn More</a>
        @endif
      </div>
    </div>
  </div>
</div>