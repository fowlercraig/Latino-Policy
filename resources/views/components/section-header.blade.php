@empty($url)
  @set($url,'')
@endempty
<section>
  <div class="prose md:prose-2xl">
    <h2 class="text-brand-dark">{{ $title }}</h2>
  </div>
  @if($url)
    @include('components.button-animated-top',[
      'cta'     => 'Read More', 
      'classes' => '', 
      'url'     => $url
    ])
  @endif
</section>