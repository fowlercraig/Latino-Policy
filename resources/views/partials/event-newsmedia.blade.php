@hasfield('media_links')
  @include('components.divider')
  <h3>News & Press</h3>
  <div>
    @fields('media_links')
      <div class="flex space-x-2 items-center">
        <div class="text-brand text-2xl">
          @fas('chevron-circle-right')
        </div>
        <div class="w-full font-medium text-sm">
          <a class="text-brand" href="@sub('link','url')" target="_blank" title="@sub('link','title')">
            @sub('link','title')
            <span class="text-xs text-gray-400 block">Open in New Window</span>
          </a>
        </div>
      </div>
    @endfields
  </div>
@endfield