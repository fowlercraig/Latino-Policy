@hasfield('downloads')
  @include('components.divider',['classes'=>'bg-white opacity-20'])
  <h3 class="font-medium text-sm text-white opacity-75">Downloads</h3>
  <ul class="grid grid-cols-2 gap-2">
    @fields('downloads')
      <li>
        <a href="@sub('download','url')" class="flex items-center">
          <div class="w-10 h-10 bg-gray-100 text-brand flex-none rounded-full mr-2 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
          </div>
          <div class="leading-tight text-sm">
            <span class="block font-medium">Download</span>
            <span class="text-xs opacity-50">@sub('download','title')</span>
          </div>
        </a>
      </li>
    @endfields
  </ul>
@endfield