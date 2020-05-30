@php $items = get_field('needtoknow') @endphp
@if ($items)
<section id="needtoknow">
  <div class="space-y-2 lg:space-y-0 grid lg:grid lg:grid-cols-2 gap-8 lg:gap-12">
    <header class="col-span-1 lg:col-span-2"> 
      <h2 class="text-2xl sm:text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0">
        @php the_field('needtoknow_headline') @endphp
      </h2> 
    </header>
    @foreach ($items as $item)
    <div class="bg-gray-100 p-8">
      @php echo $item['description'] @endphp
    </div>
    @endforeach
  </div>
</section>
@endif