@extract([
  'imageid'     => $imageid ?? false,
  'imagesize'   => $imagesize ?? 'large',
  'imageclass'  => $imageclass ?? 'w-full h-full object-cover',
])
@if($imageid)
  @image($imageid, $imagesize, ['alt' => 'LPPI', 'class' => $imageclass ])    
@endif