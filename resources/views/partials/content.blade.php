@php
  $issue    = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
  $type     = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
  $resource = '/'. get_the_terms(get_the_ID(), 'resource')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'resource')[0]->slug;
@endphp

<article @php post_class() @endphp>

  <div class="space-y-2 w-full">

    <div class="flex text-brand space-x-1 text-sm font-medium">

      @if(get_the_terms(get_the_ID(), 'resource'))
      <a href="@php echo $resource @endphp" class="bg-brand-darker text-white px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
      <span class="text-gray-400">→</span>
      @endif

      @if(get_the_terms(get_the_ID(), 'issue'))
      <a href="@php echo $issue @endphp" class="bg-brand-dark text-white px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</a>
      @if (get_the_terms(get_the_ID(), 'issue')[1]->name)
      <a href="@php echo $issue @endphp" class="bg-brand text-white px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[1]->name; @endphp</a>
      @endif
      @if (get_the_terms(get_the_ID(), 'issue')[2]->name)
      <a href="@php echo $issue @endphp" class="bg-brand-light text-white px-1 hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[2]->name; @endphp</a>
      @endif
      @endif
    </div>

    <header>
      <h2 class="text-xl sm:text-2xl leading-7 sm:leading-8 font-bold tracking-tight text-gray">
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      </h2>
    </header>

    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>

    <p class="text-sm leading-5 font-medium text-brand align-bottom">Read More</p>

  </div>

</article>

<div class="h-px bg-gray-100"></div>