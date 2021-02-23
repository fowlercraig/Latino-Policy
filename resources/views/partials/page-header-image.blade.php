@if(!is_tax('role'))
  @if(get_the_post_thumbnail())
    <div class="md:pt-12 md:-mt-12 bg-brand-dark relative h-header">
      <div class="h-px bg-white opacity-10 relative z-10"></div>
      <div class="absolute inset-0">
        @image(get_post_thumbnail_id(), 'full', ['alt' => 'Hello', 'class' => 'w-full h-full object-cover object-center'])
      </div>
      <div class="absolute inset-0 bg-gradient-to-l from-transparent to-black opacity-75"></div>
    </div>
  @else
    <div class="h-px bg-white opacity-10"></div>
  @endif
@else
  <div class="h-px bg-white opacity-10"></div>
@endif