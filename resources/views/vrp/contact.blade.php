
@php $contact = get_field('contact_us') @endphp

<section id="modules">
  <div class="space-y-20 lg:space-y-20">
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-5 gap-12 lg:items-center">
        <div class="col-span-3 lg:order-last">
          @php $image = $contact['image']; $size = 'large'; @endphp
          <div class="bg-gray-100">
            image
            @if (wp_get_attachment_caption($image))
              <span class="pt-2 pr-4 bg-white text-xs font-medium inline-block text-brand-dark absolute bottom-0">
                @php echo wp_get_attachment_caption($image); @endphp
              </span>
            @endif
            @php echo wp_get_attachment_image( $image, $size ); @endphp
          </div>
        </div>
        <div class="col-span-2 space-y-2">
          <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13">
            @php echo $contact['title'] @endphp
          </h2>
          <div>@php echo $contact['description'] @endphp</div>
          @if ($contact['link'])
          <div class="h-px"></div>
          <div><a href="@php echo $contact['link']['url']; @endphp" class="{{ $learnmore }}">Learn More</a></div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>