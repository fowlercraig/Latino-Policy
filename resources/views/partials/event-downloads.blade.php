@hasfield('downloads')
  @include('components.divider')
  <h3>Downloads</h3>
  <div>
    @fields('downloads')
      <div class="flex space-x-2 items-center">
        <div class="text-brand text-2xl">
          @fas('chevron-circle-right')
        </div>
        <div class="w-full font-medium text-sm">
          <a class="text-brand" href="@sub('download','url')"  title="@sub('download','title')" download>
            @sub('download','title')
            <span class="text-xs text-gray-400 block">Download File</span>
          </a>
        </div>
      </div>
    @endfields
  </div>
@endfield