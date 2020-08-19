@php $page = 637; @endphp
<section>
  <div class="container">
    <div class="bg-black flex flex-wrap lg:items-center">
      <div class="p-6 lg:p-10 space-y-4 w-full lg:w-1/2">
        <h2 class="text-white font-display uppercase text-display-xxs sm:text-display-sm lg:text-display-lg">@php echo get_the_title($page); @endphp</h2>
        <div class="w-24 h-px bg-red-600"></div>
        <div class="prose prose-sm sm:prose lg:prose-lg max-w-full text-gray-400">
          <div class="text-gray-400">@php echo get_the_excerpt($page) @endphp</div>
        </div>
        <div class="w-24 h-px bg-red-600"></div>
        @include('partials.buttons.button-link',['title' => 'Learn More', 'textColor' => 'text-white'])
      </div>
      <div class="w-full lg:w-1/2 flex-none">
        <div class="aspect-ratio aspect-ratio--4x3 bg-gray-500">
          @include('components.background-image',[
            'imageid'   => get_post_thumbnail_id($page),
            'imagesize' => 'large',
          ])
        </div>
      </div>
    </div>
  </div>
</section>