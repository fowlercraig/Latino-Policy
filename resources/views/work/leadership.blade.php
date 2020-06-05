@php
  $sections = get_field('section');
  $faqitems = get_field('faq');
@endphp

<section id="sections" class="space-y-10 pt-20" x-data="{ openPanel: 0 }">
  @php $i = 0 @endphp
  @foreach (array_slice($sections, 1) as $k => $v)
  <div class="h-px bg-gray-100"></div>
  <div class="lg:grid grid-cols-3 gap-12">
    <header> 
      <button 
        x-description="Expand/collapse question button" @click="openPanel = (openPanel === @php echo $i @endphp ? null : @php echo $i @endphp)"
        class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-extrabold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13">
        @php echo $v['title'] @endphp
      </button> 
    </header>
    <div class="col-span-2">
      <div class="entry-content" x-show="openPanel === @php echo $i @endphp">
        @php echo $v['description'] @endphp
      </div>
    </div>
  </div>
  @php $i++ @endphp
  @endforeach

  <div class="h-px bg-gray-100"></div>

  <div class="lg:grid grid-cols-3 gap-12">
    <header> 
      <button 
        x-description="Expand/collapse question button" @click="openPanel = (openPanel === 3 ? null : 3)"
        class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-extrabold tracking-tight text-brand-dark sm:text-4xl sm:leading-10 xl:leading-13 text-left">
        Frequently Asked Questions
      </button> 
    </header>
    <div class="col-span-2">
      @foreach ($faqitems as $section)
      <div x-show="openPanel === 3">
        <div class="font-bold text-brand-dark text-lg mb-6">@php echo $section['title'] @endphp</div>
        <div class="entry-content">
          @php echo $section['description'] @endphp
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>
