<div class="border-t-2 border-gray-200 pt-3 lg:pt-6">
  <dt class="text-lg leading-7">
    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 1 ? null : 1)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 1" aria-expanded="true">
      <span class="font-medium text-gray-900">
        Resource Type
      </span>
      <span class="ml-6 h-7 flex items-center">
        <svg class="-rotate-180 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }" x-bind-class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </span>
    </button>
  </dt>
  <dd class="mt-2 pr-12" x-show="openPanel === 1">
    @php echo do_shortcode('[ajax_load_more_filters id="press_issues" target="your_alm_id"]'); @endphp
  </dd>
</div>
<div class="border-t-2 border-gray-200 pt-3 lg:pt-6">
  <dt class="text-lg leading-7">
    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 2 ? null : 2)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 2" aria-expanded="true">
      <span class="font-medium text-gray-900">
        Issues
      </span>
      <span class="ml-6 h-7 flex items-center">
        <svg class="-rotate-180 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }" x-bind-class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </span>
    </button>
  </dt>
  <dd class="mt-2 pr-12" x-show="openPanel === 2">
    @php echo do_shortcode('[ajax_load_more_filters id="issues" target="your_alm_id"]'); @endphp
  </dd>
</div>
<div class="border-t-2 border-gray-200 pt-3 lg:pt-6">
  <dt class="text-lg leading-7">
    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 3 ? null : 3)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 3" aria-expanded="true">
      <span class="font-medium text-gray-900">
        Authors
      </span>
      <span class="ml-6 h-7 flex items-center">
        <svg class="-rotate-180 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }" x-bind-class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </span>
    </button>
  </dt>
  <dd class="mt-2 pr-12" x-show="openPanel === 3">
    @php echo do_shortcode('[ajax_load_more_filters id="experts" target="your_alm_id"]'); @endphp
  </dd>
</div>
<div class="border-t sm:border-t-2 border-gray-200 pt-3 lg:pt-6">
  <dt class="text-base sm:text-lg leading-7">
    <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 4 ? null : 4)" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none focus:text-gray-900" x-bind:aria-expanded="openPanel === 3" aria-expanded="true">
      <span class="font-medium text-gray-900">
        Work
      </span>
      <span class="ml-6 h-7 flex items-center">
        <svg class="-rotate-180 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed" :class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }" x-bind-class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }" stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </span>
    </button>
  </dt>
  <dd class="mt-2 pr-12" x-show="openPanel === 4">
    @php echo do_shortcode('[ajax_load_more_filters id="sections" target="your_alm_id"]'); @endphp
  </dd>
</div>