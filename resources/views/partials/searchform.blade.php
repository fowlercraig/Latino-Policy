<form action="/" method="get" class="relative group hidden xl:block">
  <label class="sr-only" for="search">Search in {{ home_url( '/' ) }}</label>
  <input class="h-7 px-2 rounded border border-black border-opacity-5 text-sm text-gray-600" type="text" name="s" id="search" value="{{ the_search_query() }}" placeholder="Search" />
  <button class="h-7 w-7 flex items-center justify-center absolute top-0 right-0" type="submit">
    <span class="sr-only">Search</span>
    <i height="16px" width="16px" data-feather="search"></i>
  </button>
</form>