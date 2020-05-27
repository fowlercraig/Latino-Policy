@php 
  $parent = $post->post_parent; 
  $parent_url = get_the_permalink($parent);
  $parent_title = get_the_title($parent);
@endphp

<div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
  <div class="">
    <a 
      class="rounded-full inline-block text-base text-white bg-brand-darker font-bold py-6 px-8 pl-6 items-center relative group 
      hover:bg-brand-dark transition ease duration-300 hover:shadow-xl" 
      href="@php echo $parent_url @endphp" 
      title="Opens @php echo $parent_title @endphp in same window">
      <span class="flex items-center space-x-2">
        <i class="text-white group-hover:-translate-x-1 transform transition ease duration-200" data-feather="chevron-left"></i>
        <span>Back to @php echo $parent_title @endphp</span>
      </span>
    </a>
  </div>
</div>