<div class="transform group hover:shadow-lg hover:p-6 transition ease duration-300 hover:-translate-y-1">
  <div class="aspect-ratio aspect-ratio--1x1 bg-gray-700 relative mb-3">
    <div class="absolute inset-0 transform group-hover:scale-105">
      <a title="Opens @php the_title() @endphp in the same window" href="@php the_permalink() @endphp">
        <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
      </a>
    </div>
  </div>
  <h3 class="font-semibold text-brand-darker">
    <a 
    title="Opens @php the_title() @endphp in the same window" 
    href="@php the_permalink() @endphp">
      @php the_title() @endphp
    </a>
  </h3>
  <h4 class="text-sm font-medium text-brand-darker opacity-50">
    <?php the_field('title'); ?>
  </h4>
</div>