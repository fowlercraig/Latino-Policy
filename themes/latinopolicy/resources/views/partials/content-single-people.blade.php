<article @php(post_class('space-y-5 md:space-y-12 xl:space-y-20'))>
  
  <header class="bg-brand-dark text-brand-lighter md:pt-12 md:-mt-12">
    
    <div class="h-px bg-white opacity-10"></div>
    
    <div class="container pt-6 grid lg:grid-cols-2 gap-3 md:gap-10">
      @image(get_post_thumbnail_id(), 'large', ['alt' => ' ', 'class' => 'w-full h-auto shadow-xl lg:order-last'])
      <div class="space-y-4 pb-6">
        <ul class="flex items-center space-x-1 font-medium">
          <li><a href="/people/" title="Opens People Page" class="text-gray-100 hover:underline">People</a></li>
          <li class="text-white-75">→</li>
          <li><a title="Opens {{ get_the_terms(get_the_ID(), 'role')[0]->name }} Page" href="/people/{{ get_the_terms(get_the_ID(), 'role')[0]->slug }}" class="text-gray-100 hover:underline">{{ get_the_terms(get_the_ID(), 'role')[0]->name }}</a></li>
        </ul>
        <h1 class="tracking-tight font-bold text-4xl md:text-5xl xl:text-6xl 2xl:text-7xl leading-none font-primary-a uppercase text-white">
          <span class="leading-none block">{!! $title !!}</span>
        </h1>
        @include('components.divider',['classes'=>'bg-white opacity-20'])
        @include('components.people-issues')
        @include('components.divider',['classes'=>'bg-white opacity-20'])
        @include('components.people-meta')
        @include('components.divider',['classes'=>'bg-white opacity-20'])
        @include('components.people-contact')
        @php(the_content())
      </div>
    </div>
  </header>

  <footer class="space-y-5 md:space-y-12 xl:space-y-20">
    @set($issues, get_the_terms(get_the_ID(), 'issue'))
    @include('partials.list-research',[
      'title' =>'Reports from '. get_the_title() .' ', 
      'url'   =>'/research/?contributors='.get_the_ID().'',
      'cta'   =>'More in the Research Library', 
      'limit' =>6 
    ])
    @include('partials.list-people',[
      'title' =>'Related Experts', 
      'limit' => 4,
      'url'   => '/people/experts/',
      'cta'   => 'More Experts',  
      'tax'   => $issues[0]->slug
    ])
  </footer>

</article>