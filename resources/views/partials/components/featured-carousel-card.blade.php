<article class="aspect-ratio aspect-ratio--16x9 bg-gray-100">
  <div class="absolute inset-0 container flex items-center">
    <div class="space-y-4">
      <div>@include('partials.components.ui-eyebrow',['title' => $cat])</div>
      <div class="prose lg:prose-lg xl:prose-xl">
        <h1>@php echo $title @endphp</h1>
        <p>@php echo $excerpt @endphp</p>
      </div>
      <div>@include('partials.buttons.button-link',['title' => $link])</div>
    </div>
  </div>
</article>
