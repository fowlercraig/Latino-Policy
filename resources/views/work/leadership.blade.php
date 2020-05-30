@php
  $sections = get_field('section');
  $faqitems = get_field('faq');
@endphp

<section id="sections" class="space-y-10 pt-20">
  @foreach ($sections as $section)
  <div class="h-px bg-gray-100"></div>
  <div class="lg:grid grid-cols-3 gap-12">
    <header> 
      <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-0">
        @php echo $section['title'] @endphp
      </h2> 
    </header>
    <div class="col-span-2">
      <div class="entry-content">
        @php echo $section['description'] @endphp
      </div>
    </div>
  </div>
  @endforeach

  <div class="h-px bg-gray-100"></div>

  <div class="lg:grid grid-cols-3 gap-12">
    <header> 
      <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10  mb-0">
        Frequently Asked Questions
      </h2> 
    </header>
    <div class="col-span-2">
      @foreach ($faqitems as $section)
      <div class="font-bold text-brand-dark text-lg mb-6">@php echo $section['title'] @endphp</div>
      <div class="entry-content">
        @php echo $section['description'] @endphp
      </div>
      @endforeach
    </div>
  </div>

</section>
