<a href="@permalink" class="block group space-y-2">
  <div class="aspect-w-4 aspect-h-5 bg-black transition ease relative">
    <div class="absolute inset-0 group-hover:opacity-90 transition ease duration-500 opacity-95">
      @image(get_post_thumbnail_id(), 'full', ['alt' => ' ', 'class' => 'object-cover w-full h-full'])
    </div>
  </div>
  <div class="space-y-px font-medium">
    {{-- <div class="text-sm text-gray-500">@term('issue')</div> --}}
    {{-- <div class="text-sm text-gray-500">@term('role')</div> --}}
    <div class="text-brand-dark">@title</div>
    <div class="text-sm text-gray-500">@field('title')</div>
  </div>
</a>