<div 
  data-sticky-options='{"offset":100, "minWidth":"1024px"}'
  class="bg-gray-200 bg-opacity-50 rounded p-8 font-medium text-xs space-y-3 lg:space-y-6" x-data="{ openPanel: 1 }">
  
  <form role="search" method="get" id="searchform" class="searchform mt-3 flex" action="/">
    <div class="flex flex-wrap rounded overflow-hidden w-full">
      
      <label class="sr-only" for="s">Search for:</label>

      <input 
        type="text" value="" name="s" id="s"
        aria-label="Email" 
        class="appearance-none block w-full px-3 py-2 border border-gray-300 text-base leading-6 rounded-md placeholder-gray-500 shadow-sm focus:outline-none focus:placeholder-gray-400 focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out sm:flex-1" 
        placeholder="Search">
      
      <button 
        type="submit" 
        id="searchsubmit"
        class="mt-3 w-full px-5 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-700 focus:outline-none focus:shadow-outline active:bg-gray-900 transition duration-150 ease-in-out sm:mt-0 sm:ml-2 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
        Search
      </button>

    </div>
  </form>



  @if ( is_archive( 'research' ) )
  @include('partials.sidebar-research')
  @endif 

  @if ( is_page(696) )
  @include('partials.sidebar-press')
  @endif 

  @php dynamic_sidebar('sidebar-primary') @endphp

</div>