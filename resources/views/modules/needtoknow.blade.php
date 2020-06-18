@php $items = get_field('needtoknow') @endphp
@if ($items)
<section id="needtoknow">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
    <header class="col-span-1 lg:col-span-2"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        @php the_field('needtoknow_headline') @endphp
      </h2> 
    </header>
    @foreach ($items as $item)
    <div class="bg-gray-50 rounded overflow-hidden" data-aos="fade-up">
      <div class="border-l-8 border-brand-darker flex h-full">
        @if ($item['big_number'])
        <div class="w-32 bg-brand-darker text-white items-center flex justify-center mr-6">
          <div class="text-center w-32 py-4">
            <div class="font-display text-7xl leading-15">@php echo $item['big_number'] @endphp</div>
            <div class="uppercase font-brand">@php echo $item['small_label'] @endphp</div>
          </div>
        </div>
        @else
        <div class="p-6 py-8 flex-none text-brand-darker"><i height="40" width="40" class="block" data-feather="alert-circle"></i></div>
        @endif
        <div class="p-8 pl-0 sm:text-xl lg:text-lg xl:text-xl">@php echo $item['description'] @endphp</div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endif