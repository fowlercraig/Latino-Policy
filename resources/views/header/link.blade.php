<a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="flex hover:bg-gray-50 transition ease duration-300">
  <div class="flex items-center">
    @if (is_tree(7) || is_tree(154))
    <div class="flex-shrink-0">
      <div class="h-16 w-16 rounded-md bg-brand-dark group-hover:bg-brand-darker transition duration-150 ease">
        @php $image = get_field('icon'); $size = 'large'; @endphp
        @php echo wp_get_attachment_image( $image, $size ); @endphp
      </div>
    </div>
    @endif
    <div class="ml-4">
      <h5 class="text-2xl sm:text-xl leading-6 sm:leading-6 font-extrabold tracking-tight text-brand-dark mb-0">@php the_title(); @endphp</h5>
      <p class="text-gray-500 font-medium text-sm">
        Learn more
      </p>
    </div>
  </div>
  <div class="opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition transform ease duration-150 text-brand pr-2">
    <i data-feather="chevron-right"></i>
  </div>
</a>