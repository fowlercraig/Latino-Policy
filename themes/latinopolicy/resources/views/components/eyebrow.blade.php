<div class="bg-brand h-8 px-3 inline-flex items-center text-white space-x-1 text-xs sm:text-sm font-medium">
  
  @if(has_term('','resource'))
    <span class="flex-none">@term('resource')</span>
    <i class="flex-none" height="16" width="16" data-feather="arrow-right"></i>
  @endif
  @if(has_term('','issue'))
    <span class="flex-none">@term('issue')</span>
  @endif

</div>