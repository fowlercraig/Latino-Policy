@php
  $issue    = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
  $type     = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
  $resource = '/'. get_the_terms(get_the_ID(), 'issue')[0]->taxonomy . '/' . get_the_terms(get_the_ID(), 'issue')[0]->slug;
@endphp

<div class="h-px bg-gray-100"></div>
<article @php post_class() @endphp>
  <div class="space-y-2">
    <div class="flex text-brand space-x-1 text-sm">
      @php $postType = get_post_type_object(get_post_type()) @endphp
      @if ($postType)
      <a href="@php echo $type @endphp" class="font-medium">@php echo esc_html($postType->labels->singular_name); @endphp</a>
      @endif 
      @php if(get_the_terms(get_the_ID(), 'issue')): @endphp
      <a href="@php echo $issue @endphp" class="font-medium hover:underline">→ @php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</a>
      @php endif; @endphp
      @php if(get_the_terms(get_the_ID(), 'resource')): @endphp
      <a href="@php echo $resource @endphp" class="font-medium">→ @php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</a>
      @php endif; 
      @endphp

    </div>
    <header>
      <h2 class="text-xl sm:text-2xl leading-7 sm:leading-8 font-bold tracking-tight text-brand-dark">
        <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      </h2>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
    <p class="text-sm leading-5 font-medium text-brand align-bottom">Read More</p>
  </div>
  @if ( has_post_thumbnail() )
  <div class="bg-gray-900 flex-none h-32 w-48 order-first mr-6 text-center z-10">
    <?php the_post_thumbnail( 'large', array( 'class' => 'opacity-75 object-cover transition ease duration-300 w-full h-full' ) ); ?>
  </div>
  @endif
</article>
