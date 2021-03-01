@empty($url)
  @set($url,'#')
@endempty

@empty($classes)
  @set($classes,'')
@endempty

@empty($target)
  @set($target,'_self')
@endempty

<a class="font-medium inline-block space-y-1 group text-sm sm:text-base no-underline {{ $classes }}" href="{{ $url }}" target="{{ $target }}">
  <span class="block order-last">{{ $cta }}</span>
  <div class="relative bg-brand-lighter">
    <span class="h-0.5 bg-transparent block relative"></span>
    <span class="h-0.5 bg-brand-darker block absolute bottom-0 w-0 group-hover:w-full transition-all ease duration-300"></span>
  </div>
</a>