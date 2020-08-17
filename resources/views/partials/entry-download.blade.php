@php
  $file = get_field('file');
  if ( is_singular( 'research' ) || is_singular( 'event' ) || is_singular( 'press' ) ) {
    $name = '';
    $role = '';
    $back = '';
    $icon = '';
  } else {
    $name = '';
    $role = '';
    $back = '';
    $icon = '';
  }
@endphp

<div class="flex space-x-2 @php echo $spacing @endphp @php echo $textColor @endphp @endphp @php echo $padding @endphp">
  <a href="@php echo $file['url']; @endphp" download class="inline-flex items-center space-x-2 group">
    <div class="bg-white h-10 w-10 flex items-center justify-center @php echo $back; @endphp @php echo $icon; @endphp rounded-full group-hover:scale-105 transition transform ease duration-300">
      <i height="18" width="18" data-feather="download"></i>
    </div>
    <div>
      <p class="@php echo $name; @endphp font-medium text-sm">Download Full Report</p>
      <p class="@php echo $role; @endphp font-medium text-xs">@php echo $file['title']; @endphp</p>
    </div>
  </a>
</div>
