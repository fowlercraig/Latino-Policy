@php $items = get_field('needtoknow') @endphp
@if ($items)
<section id="needtoknow">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
    <header class="col-span-1 lg:col-span-2"> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-extrabold tracking-tight text-brand-darker mb-0">
        @php the_field('needtoknow_headline') @endphp
      </h2> 
    </header>
    @foreach ($items as $item)
    <div class="bg-gray-50 rounded overflow-hidden" data-aos="fade-up">
      <div class="border-l-4 border-brand flex h-full">
        <div class="p-6 py-8 flex-none text-brand"><i height="40" width="40" class="block" data-feather="alert-circle"></i></div>
        <div class="p-8 pl-0">@php echo $item['description'] @endphp</div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endif