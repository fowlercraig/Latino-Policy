@set($contributors, get_field('contributors'))

@if($contributors)
  @include('components.section-header',['title'=>'Contributors'])
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach( $contributors as $contributor )
      <article>
        <a href="@permalink($contributor)" class="block">
          <div class="aspect-w-3 aspect-h-4 bg-gray-50"></div>
          <h5>@title($contributor)</h5>
        </a>
      </article>
    @endforeach
  </div>
@endif
