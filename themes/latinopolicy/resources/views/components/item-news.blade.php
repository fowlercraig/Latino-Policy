@if(get_field('publication_link'))
  @set($link,get_field('publication_link')['url'])
  @set($target,'_blank')
@else
  @set($link,get_permalink())
  @set($target,'_blank')
@endif

<article class="space-y-3">
  <a href="{!! $link !!}" class="block relative cursor-pointer">
    <div class="aspect-w-16 aspect-h-9 md:aspect-w-4 md:aspect-h-3 bg-brand-dark relative">
      <div class="absolute inset-0 flex items-center justify-center">
        @if(get_the_post_thumbnail())
          <img src="@thumbnail('full', false)" alt="@title" class="w-full h-full object-cover" />
        @else
          <div class="text-6xl text-brand">
            @far('newspaper', 'w-full h-full object-contain')
          </div>
        @endif
      </div>
    </div>
  </a>
  @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
  <div class="prose">
    <h3 class="text-brand-dark">@title</h3>
    @include('components.button-animated',[
      'cta'=>'Read More', 
      'classes'=>'', 
      'url'=> $link
    ])
  </div>
</article>