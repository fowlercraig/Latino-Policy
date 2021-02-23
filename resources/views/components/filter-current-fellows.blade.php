@php $values = []; @endphp

@posts
  @php 
    $values[] = array(
      'year' => get_field('title')
    );
  @endphp
@endposts

<ul id="filters" class="filters text-sm font-medium flex space-x-1">
  <li>Filter by Year</li>
  @php
    $temp = array_unique(array_column($values, 'year'));
    $years = array_intersect_key($values, $temp);
  @endphp
  @foreach($years as $year)
  <li class="space-x-1">
    <span>|</span>
    <button data-filter=".filter-{{ preg_replace('/\s*/', '', $filter) }}">{{ $year['year'] }}</button>
  </li>
  @endforeach
</ul>