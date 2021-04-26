@if(get_field('publication_link'))
  @set($link,get_field('publication_link')['url'])
  @set($target,'_blank')
@else
  @set($link,get_permalink())
  @set($target,'_blank')
@endif

<article class="space-y-3">
  <a href="{!! $link !!}" class="block relative cursor-pointer">
    @thumbnail('full')
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