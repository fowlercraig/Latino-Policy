<div class="relative" x-data="{ mobile: true }" x-cloak>
  <button @click="mobile = !mobile" class="block md:hidden border border-brand border-opacity-30 text-brand rounded h-10 w-10 flex items-center justify-center">
    <div :class="{ 'hidden': mobile, 'block': !mobile }"><i stroke-width="1px" data-feather="menu"></i></div>
    <div :class="{ 'block': mobile, 'hidden': !mobile }"><i stroke-width="1px" data-feather="x"></i></div>
  </button>
  <div x-show="mobile" x-cloak class="fixed inset-x-0 top-16 z-30 md:hidden">
    <div class="container mt-2">
      <div class="bg-white text-brand-dark font-medium text-sm rounded shadow-xl px-4 py-3 overflow-hidden">
        @if ($navigation)
          <ul class="divide-y divide-gray-100 mb-4">
            @foreach ($navigation as $item)
              <li class="py-2">
                <a class="flex justify-between items-center" href="{!! $item->url !!}">
                  <span class="font-medium text-lg">{!! $item->label!!}</span> 
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </a>
              </li>
            @endforeach
          </ul>
        @endif
        <div class="flex items-center bg-brand-lightest px-4 -mx-4 -mb-4">
          <a class="py-3 w-1/2 block text-base" href="/press-archive">Press Archive</a>
          <a class="py-3 w-1/2 block text-base" href="/research">Research Library</a>
        </div>
      </div>
    </div>
  </div>
</div>