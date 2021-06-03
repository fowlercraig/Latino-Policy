<ul class="font-medium flex items-center space-x-4">

  @hasfield('email')
    <li>
      <a class="text-xl hover:text-white transition ease" target="_blank" href="{{ get_field('email')['url'] }}" title="@field('email','title')">
        <i class="fa fa-envelope"></i>
        <span class="sr-only">@field('email','title')</span>
      </a>
    </li>
  @endfield

  @hasfield('twitter')
    <li>
      <a class="text-xl hover:text-white transition ease" target="_blank" href="{{ get_field('twitter')['url'] }}" title="@field('twitter','title')">
        <i class="fab fa-twitter"></i>
        <span class="sr-only">@field('twitter','title')</span>
      </a>
    </li>
  @endfield

  @hasfield('linkedin')
    <li>
      <a class="text-xl hover:text-white transition ease" target="_blank" href="{{ get_field('linkedin')['url'] }}" title="@field('linkedin','title')">
        <i class="fab fa-linkedin"></i>
        <span class="sr-only">@field('twitter','title')</span>
      </a>
    </li>
  @endfield

</ul>