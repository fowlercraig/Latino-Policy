@extract([
  'textColor' => $textColor ?? 'text-white opacity-75',
])

@set($contributors, get_field('contributors'))

@if($contributors)
  @include('components.divider',['classes'=>'bg-white opacity-20'])
  <h3 class="font-medium text-sm {{ $textColor }}">Contributors</h3>
  <div class="grid grid-cols-2 gap-2">
    @foreach( $contributors as $contributor )
      <a href="@permalink($contributor)" class="flex items-center">
        @set($image, get_post_thumbnail_id($contributor))
        @image($image, 'thumbnail', ['alt' => 'My alt tag', 'class' => 'my-0 mr-4 w-10 h-10 rounded-full'])
        <div class="leading-tight text-sm">
          <span class="block font-medium {{ $textColor }}">@title($contributor)</span>
          <span class="block font-medium text-xs">@term('role', $contributor)</span>
        </div>
      </a>
    @endforeach
  </div>
@endif
