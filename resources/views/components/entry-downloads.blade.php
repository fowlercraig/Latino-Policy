@hasfield('downloads')
  <ul class="grid grid-cols-2 gap-2">
    @fields('downloads')
      <li>
        <a href="@sub('download','url')" class="flex items-center">
          <div class="w-10 h-10 bg-gray-100 flex-none rounded-full mr-2"></div>
          <div class="leading-tight text-sm">
            <span class="block font-medium">Download</span>
            <span class="text-xs opacity-50">@sub('download','title')</span>
          </div>
        </a>
      </li>
    @endfields
  </ul>
@endfield