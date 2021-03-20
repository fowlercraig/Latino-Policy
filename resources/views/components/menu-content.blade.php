
  <div class="container py-6 md:py-10 grid grid-cols-2 gap-4 md:gap-6">
    <div class="space-y-4">
      <div class="prose md:prose-lg lg:prose-xl max-w-full">
        <h1 class="uppercase font-primary-a text-brand-darker uppercase tracking-tight">{{ $item->label }}</h1>
      </div>
      <div class="prose prose-sm sm:prose">
        <p>{!! get_the_excerpt($item->objectId) !!}</p>
      </div>
      <div>
        @include('components.button-animated',[
          'cta'      =>'Learn More', 
          'classes'  =>'',
          'url'      => get_the_permalink($item->objectId)
        ])
      </div>
    </div>
    <div class="pt-2">
      <ul class="grid grid-cols-2 gap-2 md:gap-4">
        @foreach ($item->children as $child)
          <li class="block my-child-item {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
            <a href="{{ $child->url }}" class="font-medium text-brand-dark block flex border rounded items-center hover:shadow-xl transition ease duration-500">
              <div class="w-20 flex-none">
                @set($image,get_field('icon', $child->objectId))
                @image($image, 'thumbnail', ['alt' => 'LPPI', 'class' => 'object-cover w-full h-full'])
              </div>
              <span class="pr-4 leading-tight">{!! $child->label !!}</span>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
