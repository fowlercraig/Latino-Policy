<div>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
    <div class="flex items-center space-x-1">

      @if(!is_singular('event'))
        <span>Published</span> 
        <i height="16" width="16" data-feather="arrow-right"></i>
        <span>@published</span>
      @else
        <span>Event Date</span> 
        <i height="16" width="16" data-feather="arrow-right"></i>
        <span>@field('date')</span>
      @endif

    </div>
  </time>
</div>

{{-- <p class="byline author vcard">
  <span>{{ __('By', 'sage') }}</span>
  <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
 --}}