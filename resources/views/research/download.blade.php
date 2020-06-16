@php $file = get_field('file'); @endphp

<a href="@php echo $file['url']; @endphp" download class="inline-flex items-center space-x-2 group">
  <div class="h-10 w-10 bg-gray-100 flex items-center justify-center bg-brand-dark rounded-full text-white group-hover:scale-105 transition transform ease duration-300">
    <i height="18" width="18" data-feather="download"></i>
  </div>
  <div>
    <p class="text-brand-darker font-medium text-sm">Download Full Report</p>
    <p class="text-gray-500 font-medium text-xs">@php echo $file['title']; @endphp</p>
  </div>
</a>