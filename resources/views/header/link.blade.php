<a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
  <div class="flex">
    <div class="flex-shrink-0">
      <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
        </svg>
      </div>
    </div>
    <div class="ml-4 space-y-1">
      <h5 class="text-lg leading-6 font-medium text-gray-900">@php the_title(); @endphp</h5>
      <p class="mt-2 text-sm text-gray-500">
        @php echo get_the_excerpt(); @endphp
      </p>
      <p class="text-sm leading-5 font-medium text-brand">
        Learn more →
      </p>
    </div>
  </div>
</a>