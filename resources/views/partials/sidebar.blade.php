<div class="bg-gray-50 rounded p-8 font-medium text-xs space-y-8">
  
  <form role="search" method="get" id="searchform" class="searchform" action="/">
    <div class="flex rounded overflow-hidden">
      <label class="sr-only" for="s">Search for:</label>
      <input class="w-full p-3" type="text" value="" name="s" id="s" />
      <input class="flex-none px-4 cursor-pointer text-white bg-brand-dark hover:bg-brand-darker font-medium transition ease duration-200" type="submit" id="searchsubmit" value="Search" />
    </div>
  </form>
  @php dynamic_sidebar('sidebar-primary') @endphp

</div>