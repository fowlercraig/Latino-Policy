@php
  $file = get_field('file');
  $files = get_field('files');
  $downloadable = get_field('download', $file['ID']);

  if ( is_singular( 'research' ) || is_singular( 'event' ) || is_singular( 'press' ) ) {
    $name = 'text-white';
    $role = 'text-white-50';
    $back = 'bg-white';
    $icon = 'text-brand-darker';
  } else {
    $name = 'text-brand-darker';
    $role = 'text-gray-500';
    $back = 'bg-brand-dark';
    $icon = 'text-white';
  }
@endphp

@if($file)

<div>
  <a href="@php echo $file['url']; @endphp" @if($downloadable) download @endif class="inline-flex items-center space-x-2 group">
    <div class="h-10 w-10 flex flex-none items-center justify-center @php echo $back; @endphp @php echo $icon; @endphp rounded-full group-hover:scale-105 transition transform ease duration-300">
      <i height="18" width="18" data-feather="download"></i>
    </div>
    <div>
      <p class="@php echo $name; @endphp font-medium text-sm">Download</p>
      <p class="@php echo $role; @endphp font-medium text-xs">@php echo $file['title']; @endphp</p>
    </div>
  </a>
</div>
@endif

@if($files)
@foreach ($files as $item)
@php $downloadable = get_field('download', $item['file']['ID']); @endphp
<div>
  <a href="@php echo $item['file']['url']; @endphp" @if($downloadable) download @endif class="inline-flex items-center space-x-2 group">
    <div class="h-10 w-10 flex flex-none items-center justify-center @php echo $back; @endphp @php echo $icon; @endphp rounded-full group-hover:scale-105 transition transform ease duration-300">
      <i height="18" width="18" data-feather="download"></i>
    </div>
    <div>
      <p class="@php echo $name; @endphp font-medium text-sm">Download</p>
      <p class="@php echo $role; @endphp font-medium text-xs">@php echo $item['file']['title']; @endphp</p>
    </div>
  </a>
</div>
@endforeach
@endif