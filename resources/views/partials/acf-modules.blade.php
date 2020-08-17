<!-- General Modules -->
@php $modules = get_field('modules') @endphp
@if($modules)
  <div class="container space-y-16">
  @foreach ($modules as $item)
    @php $title   = $item['title'] @endphp
    @php $desc    = $item['description'] @endphp
    @php $image   = $item['image'] @endphp
    @include('components.image-text',[
      'title'     => $title,
      'desc'      => $desc,
      'imageid'   => $item['image'],
      'imagesize' => 'large',
    ])
  @endforeach
  </div>
@endif

<!-- History Modules -->
@php $title   = get_field('title') @endphp
@php $desc    = get_field('description') @endphp
@php $image   = get_field('image') @endphp
<div class="container">
@include('components.image-text',[
  'title'     => $title,
  'desc'      => $desc,
  'imageid'   => $item['image'],
  'imagesize' => 'large',
])
</div>