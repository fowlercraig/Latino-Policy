@posts
  @php 
    $values[] = array(
      'year' => get_field('title')
    );
  @endphp
@endposts

@php
  $temp = array_unique(array_column($values, 'year'));
  $years = array_intersect_key($values, $temp);
@endphp

<div class="button-group filters-button-group filters text-sm font-medium flex space-x-1">
  <div class="mr-1">Filter</div>
  <div class="space-x-1 text-gray-400">
    <span>|</span>
    <button class="text-current" data-filter="*">All Fellows</button>
  </div>
  @foreach($years as $year)
  <div class="space-x-1 text-gray-400">
    <span>|</span>
    <button class="text-current" data-filter=".filter-{{ preg_replace('/\s*/', '', $year['year']) }}">{{ $year['year'] }}</button>
  </div>
  @endforeach
</div>
