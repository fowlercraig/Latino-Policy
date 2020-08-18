@php $page = 637; @endphp
<section>
  <div class="container">
    <div class="h-64 bg-black">
      <div class="prose prose-sm sm:prose lg:prose-lg max-w-none p-8">
        <h2><span class="text-white">@php echo get_the_title($page); @endphp</span></h2>
        <div class="text-gray-400">@php echo get_the_excerpt($page) @endphp</div>
        @include('partials.buttons.button-link',['title' => 'Learn More', 'textColor' => 'text-white'])
      </div>
    </div>
  </div>
</section>