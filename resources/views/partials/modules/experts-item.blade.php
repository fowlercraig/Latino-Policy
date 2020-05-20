<a
  title="Opens @php the_title() @endphp in the same window"  
  href="@php the_permalink() @endphp"
  class="block transform group transition ease duration-300">
  <div class="aspect-ratio aspect-ratio--3x4 bg-gray-700 relative mb-3 overflow-hidden group-hover:shadow-lg">
    <div class="absolute inset-0 transform transition ease duration-500 group-hover:scale-105">
      <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
    </div>
  </div>
  <h3 class="font-semibold text-brand-darker">
    @php the_title() @endphp
  </h3>
  <h4 class="text-sm font-medium text-brand-darker opacity-50">
    <?php the_field('title'); ?>
  </h4>
</a>