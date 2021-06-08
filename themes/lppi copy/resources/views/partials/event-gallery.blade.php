@hasfield('gallery')
  <div class="space-y-4">
    <div class="prose">
      <h3 class="text-brand-dark">Gallery</h3>
    </div>
    <div class="grid grid-cols-4 gap-2">
      @foreach(get_field('gallery') as $image)
        <a href="@permalink($image)" class="block bg-black group">
          <div class="aspect-w-4 aspect-h-3 relative group-hover:opacity-75 transition ease duration-500">
            <div class="absolute inset-0">
              @image($image, 'medium', ['alt' => 'Latino Politics & Policy Initiative', 'class' => 'w-full h-full object-cover object-center'])
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endfield