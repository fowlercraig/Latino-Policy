@extract([
  'url'     => $url ?? false,
  'classes' => $classes ?? false,
  'target'  => $target ?? '_self',
  'group'   => $group ?? false,
  'cta'     => $cta ?? 'Call to Action',
])

<a class="font-medium inline-block space-y-1 @if(!$group) group @endif text-sm sm:text-base no-underline {{ $classes }}" href="{{ $url }}" target="{{ $target }}">
  <div class="relative">
    <span class="absolute inset-0 bg-brand bg-opacity-50"></span>
    <span class="h-0.5 bg-transparent block relative"></span>
    <span class="h-0.5 bg-brand block absolute bottom-0 w-0 group-hover:w-full transition-all ease duration-300"></span>
  </div>
  <span class="block order-last">{{ $cta }}</span>
</a>