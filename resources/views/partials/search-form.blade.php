<div class="border-4 border-brand-darker p-lg relative overflow-hidden">
  <form class="w-full relative" role="search" method="get" id="searchform" action="http://www.test.dev/">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full px-3 mb-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Search For
        </label>
        <input value="" name="s" id="s" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      </div>
    </div>
    <input class="my-0" type="submit" id="searchsubmit" value="Search" />
    <input class="invisible" type="text" value="" name="s" id="s" />
    <input class="invisible" type="hidden" value="1" name="sentence" />
    <input class="invisible" type="hidden" value="product" name="post_type" />
  </form>
</div>