<section id="history">
  <div class="space-y-20 lg:space-y-40">
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-2 gap-12 lg:items-center">
        <div class="lg:order-last">
          @php $image = get_field('image'); $size = 'large'; @endphp
          @php echo wp_get_attachment_image( $image, $size ); @endphp
        </div>
        <div class="space-y-2 lg:order-last">
          <span class="inline-block font-bold text-brand-dark relative group">History</span>
          <h2 class="text-2xl sm:text-3xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
            @php the_field('title') @endphp
          </h2>
          <div class="h-2"></div>
          <div class="entry-content">
            @php the_field('description'); @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</section>