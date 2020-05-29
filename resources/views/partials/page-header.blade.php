@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp
<div class="page-header">
  <div class="-mx-64 py-20 bg-brand-dark space-y-2">
    <div class="container">
    @if ($parent)
    <a
      title="Opens @php echo $parent_title @endphp in same window"
      href="@php echo $parent_url @endphp"  
      class="inline-block font-bold text-white bg-brand-darker px-2 py-1 hover:bg-brand-dark transition duration-200">
      @php echo $parent_title @endphp
    </a>
    @endif
    <h1 class="uppercase font-extrabold text-white tracking-tighter sm:leading-15 sm:text-7xl">{!! App::title() !!}</h1>
  </div>
</div>
