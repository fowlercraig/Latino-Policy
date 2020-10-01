@php $items = get_field('additional_media'); @endphp
@if($items)
<h3>News & Press</h3>
<div class="font-medium prose text-gray-700 space-y-2">
<div class="flex items-center">
  <div class="h-6 w-6 mr-2 rounded-full bg-brand-darker flex items-center justify-center">
    <i height="16" width="16" class="text-white" data-feather="chevron-right"></i>
  </div>
  <a href="@php echo get_field('newsmedia')['url']; @endphp" class="no-underline" target="_blank">@php echo get_field('newsmedia')['title']; @endphp</a>
</div>
@foreach($items as $item)
<div class="flex items-center">
  <div class="h-6 w-6 mr-2 rounded-full bg-brand-darker flex items-center justify-center">
    <i height="16" width="16" class="text-white" data-feather="chevron-right"></i>
  </div>
  <a href="@php echo $item['link']['url']; @endphp" class="no-underline" target="_blank">@php echo $item['link']['title']; @endphp</a>
</div>
@endforeach
</div>
@endif