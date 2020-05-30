@php
  $issue = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
@endphp

<div class="h-px bg-gray-100"></div>
<article @php post_class('space-y-4') @endphp>
  <div class="flex text-brand space-x-1 text-sm">
    @php $postType = get_post_type_object(get_post_type()) @endphp
    @if ($postType)
    <a href="" class="font-medium">@php echo esc_html($postType->labels->singular_name); @endphp →</a>
    @endif 
    @php if(get_the_terms(get_the_ID(), 'issue')): @endphp
    <a href="@php echo $issue @endphp" class="font-medium hover:underline">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp →</a>
    @php endif; @endphp
    @php if(get_the_terms(get_the_ID(), 'resource')): @endphp
    <a href="" class="font-medium">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
    @php endif; 
    @endphp

  </div>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
