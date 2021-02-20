@set($contributors, get_field('contributors'))

@if($contributors)
  <div class="grid grid-cols-2 gap-2">
    @foreach( $contributors as $contributor )
      <a href="@sub('download','url')" class="flex items-center">
        @set($image, get_post_thumbnail_id($contributor))
        @image($image, 'thumbnail', ['alt' => 'My alt tag', 'class' => 'my-0 mr-4 w-10 h-10 rounded-full'])
        <div class="leading-tight text-sm">
          <span class="block font-medium">@title($contributor)</span>
        </div>
      </a>
    @endforeach
  </div>
@endif
