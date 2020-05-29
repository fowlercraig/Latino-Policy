<section id="history">
  <div class="space-y-20 lg:space-y-40">
    <div data-aos="fade-up">
      <div class="space-y-2 lg:space-y-0 lg:grid grid-cols-2 gap-12 lg:items-center">
        <div class="lg:order-last">
          <div class="aspect-ratio aspect-ratio--8x5 bg-gray-100"></div>
        </div>
        <div class="space-y-2">
          <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-dark sm:text-4xl sm:leading-10">
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