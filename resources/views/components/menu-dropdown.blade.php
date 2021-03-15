<div 
  id="dropdown-{!! $item->label !!}"  
  x-show="menu === '{!! $item->label !!}'" x-cloak
  x-description="Flyout menu, show/hide based on flyout menu state."> 
  <div class="py-6 md:py-10 grid grid-cols-2 gap-4 md:gap-6">
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
    <div>
      <ul class="grid grid-cols-2 gap-2 md:gap-4">
        @foreach ($item->children as $child)
          <li class="block my-child-item {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
            <a href="{{ $child->url }}" class="block p-6 bg-gray-100 hover:bg-gray-200">{!! $child->label !!}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>