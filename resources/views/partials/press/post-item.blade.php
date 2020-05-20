<article class="post mb-16">

  <ul>@php
    $categories = $categories = get_the_category();
    foreach ( $categories as $category ): @endphp
    <li class="inline-block">
      <span class="bg-primary text-white inline-block py-1 px-2 text-xs font-bold mb-3">
        @php echo $category->name; @endphp
      </span>
    </li>
    @php endforeach;
  @endphp</ul>

  <h2 class="mb-3 text-2xl font-bold"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  
  <div class="text-grey-darker">
    @php the_excerpt() @endphp
  </div>

  @php $posts = get_field('people');
  if( $posts ): @endphp
  <ul class="authors flex mb-3">
    @php foreach( $posts as $p ): @endphp
    <li class="flex items-center -mr-1">
      <div class="h-8 w-8 rounded-full bg-red shadow overflow-hidden">
        @php echo get_the_post_thumbnail($p->ID,'thumbnail'); @endphp
      </div>
    </li>
    @php endforeach; @endphp
  </ul>
@php endif; @endphp

  <a
    title="Opens {!! get_the_title() !!} in same window" 
    class="border-b border-red pb-1 text-sm" 
    href="@php the_permalink() @endphp">Read More
  </a>

</article>