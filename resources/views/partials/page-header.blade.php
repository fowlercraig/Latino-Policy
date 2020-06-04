@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header bg-brand-darker">
  <div class="containers">
    <div class="grid grid-cols-5">
      <div class="container col-span-5  @if ( has_post_thumbnail() ) lg:col-span-2 @endif py-10 space-y-4">
        @if (is_tax( 'issue' ))
        <a
          title="Opens @php echo $parent_title @endphp in same window"
          href="@php echo $parent_url @endphp"  
          class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
          &larr; Back to Research Archive
        </a>
        @endif
        @if ($parent)
        <a
          title="Opens @php echo $parent_title @endphp in same window"
          href="@php echo $parent_url @endphp"  
          class="inline-block font-medium text-gray-300 transition duration-200 border-b border-transparent hover:border-gray-300">
          &larr; Back to @php echo $parent_title @endphp
        </a>
        @endif
        <h1 class="font-extrabold text-white tracking-tight sm:leading-18 sm:text-6xl mb-0">{!! App::title() !!}</h1>
        @if (!is_archive() || !is_search())
        <div class="font-medium text-gray-300 -mt-1 max-w-3xl">
          @php the_content() @endphp
        </div>
        @endif
      </div>
      @if (!is_archive())
      @if ( has_post_thumbnail() )
      <div class="col-span-5 lg:col-span-3 order-first lg:order-last">
        <div class="h-48 lg:h-0 lg:aspect-ratio lg:aspect-ratio--6x4 xl:aspect-ratio--16x9 bg-brand-darker relative">
          <div class="absolute inset-0">
            <?php the_post_thumbnail( 'large', array( 'class' => 'object-cover object-top transition ease duration-300 w-full h-full' ) ); ?>
          </div>
        </div>
      </div>
      @endif
      @endif
    </div>
  </div>
</div>