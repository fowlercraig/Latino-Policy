@if($children)
<a @mouseenter="menu !== '{!! $title !!}' ? menu = '{!! $title !!}' : menu = null " class="flex space-x-1 items-center relative hover:underline" href="{!! $link !!}">
  <span>{!! $title !!}</span> 
  <i width="16px" height="16px" class="text-gray-300" data-feather="chevron-down"></i>
</a>
@else
<a @mouseenter="menu = null" class="hover:underline" href="{!! $link !!}">{!! $title !!}</a>
@endif