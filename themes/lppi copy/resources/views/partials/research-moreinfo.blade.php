@hasfield('moreinfo')
  <div>
    <h3>Additional Content</h3>
    <div>
      @fields('moreinfo')
        <div class="grid grid-cols-3 gap-6 p-4 shadow rounded">
          <div class="col-span-1">
            <div class="aspect-w-4 aspect-h-3 bg-gray-100 relative">
              <div class="absolute inset-0">
                @set($image,get_sub_field('image'))
                @image($image, 'medium', ['alt' => 'My alt tag', 'class' => 'block w-full h-full object-cover nomargin'])
              </div>
            </div>
          </div>
          <div class="col-span-2 prose prose-sm">
            <h3>@sub('title')</h3>
            <div>@sub('description')</div>
            <a href="@sub('link','url')">
              <span class="underline">@sub('link','title')</span>
            </a>
          </div>
        </div>
      @endfields
    </div>
  </div>
@endfield