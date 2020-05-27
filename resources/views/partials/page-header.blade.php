@if ( has_post_thumbnail() )
<div class="page-header bg-brand-darker relative">
@else
<div class="page-header bg-brand-darker relative pt-24 -mt-16">
@endif
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="h-64 md:h-header bg-blue-800 -mt-16 relative">
      <div class="absolute inset-0 bg-black z-10 opacity-25"></div>
      <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover w-full h-full' ) ); ?>
    </div>
  <?php endif; ?>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
    <div class="relative z-10">
      @php 
        $parent = $post->post_parent; 
        $parent_url = get_the_permalink($parent);
        $parent_title = get_the_title($parent);
      @endphp
      @if ($parent)
      <a 
        class="inline-block uppercase font-brand tracking-wider bg-red-500 hover:bg-red-600 transition duration-200 ease text-white font-medium py-1 px-3 absolute top-0" 
        href="@php echo $parent_url @endphp" 
        title="Opens @php echo $parent_title @endphp in same window">
        @php echo $parent_title @endphp
      </a>
      @endif
      <div class="space-y-4 md:space-y-0 md:grid md:grid-cols-2 md:gap-8 pt-xl pb-lg lg:py-xl">
        <h2 class="text-5xl font-display uppercase font-medium leading-7 text-white sm:text-7xl sm:leading-16 tracking-tight mb-0">
          {!! App::title() !!}
        </h2>
        <div class="text-white opacity-75 font-medium">
          @php the_content() @endphp
        </div>
      </div>
    </div>
    <div class="opacity-25 absolute top-0 left-0 pointer-events-none z-0">
      <img 
        alt="Pattern"
        src="@asset('images/Pattern.png')" srcset="@asset('images/Pattern.png') 1x, @asset('images/Pattern@2x.png') 2x, @asset('images/Pattern@3x.png') 3x">
    </div>
  </div>
</div>