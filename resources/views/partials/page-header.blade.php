@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header">
  @if ( has_post_thumbnail() )
  <div class="-mx-64 bg-gray-900 h-64 text-center rellax z-10">
    <?php the_post_thumbnail( 'large', array( 'class' => 'opacity-75 object-cover transition ease duration-300 w-full h-full' ) ); ?>
  </div>
  @endif
  <div class="-mx-64 py-6 pb-6 bg-brand-dark space-y-2 relative z-20">
    <div class="container">
      <div class="grid lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-12">
        <div class="relative space-y-2">
          <h1 class="uppercase font-display font-extrabold text-white tracking-tight sm:leading-15 sm:text-7xl mb-0">{!! App::title() !!}</h1>
          @if ($parent)
          <a
            title="Opens @php echo $parent_title @endphp in same window"
            href="@php echo $parent_url @endphp"  
            class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
            &larr; Back to @php echo $parent_title @endphp
          </a>
          @endif
        </div>
        <div class="font-medium text-gray-300 -mt-1">
          @php the_content() @endphp
        </div>
      </div>
    </div>
  </div>
</div>
