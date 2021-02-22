@hasfield('stats')
  <div class="container space-y-6">
    @include('components.section-header',['title'=>'What You Need to Know:'])
    <ul class="grid lg:grid-cols-2 gap-4 lg:gap-10">
      @fields('stats')
        <div class="grid grid-cols-3 bg-brand-lightest rounded items-center overflow-hidden">
          <div class="bg-brand-dark text-white text-center">
            <div class="aspect-w-4 aspect-h-3 relative">
              <div class="absolute inset-0 flex items-center justify-center">
                <span class="tracking-tight font-bold text-6xl xl:text-7xl font-primary-a uppercase">
                  40%
                </span>
              </div>
            </div>
          </div>
          <div class="prose prose-sm sm:prose col-span-2 p-6">@sub('description')</div>
        </div>
      @endfields
    </ul>
  </div>
@endfield