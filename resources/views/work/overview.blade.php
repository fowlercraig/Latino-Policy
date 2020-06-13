@php $items = get_field('section'); @endphp
<section id="matters">
  <div class="space-y-2 p-8 border-8 border-brand-dark">
    <header> 
      <h2 class="text-2xl sm:text-4xl leading-7 sm:leading-10 font-bold tracking-tight text-brand-darker mb-0">
        @php echo $items['0']['title'] @endphp
      </h2> 
    </header>
    <div class="lg:text-lg">@php echo $items['0']['description'] @endphp</div>
  </div>
</section>
