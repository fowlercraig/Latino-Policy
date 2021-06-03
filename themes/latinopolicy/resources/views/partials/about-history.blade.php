<section>
  <div class="container">
    <div class="grid lg:grid-cols-2 gap-4 md:gap-6 xl:gap-10">
      <div data-aos="fade-up">
        @image(get_field('history_image'), 'large')
      </div>
      <div class="prose prose-sm sm:prose md:prose-xl mx-auto sm:mx-auto">
        <h2 class="text-brand-dark">@field('history_title')</h2>
        <div class="text-base">@field('history_description')</div>
      </div>
    </div>
  </div>
</section>