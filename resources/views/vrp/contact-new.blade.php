<section class="space-y-2">
  <div class="max-w-2xl mx-auto text-center">
    <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 xl:leading-13">@php the_field('contact_headline') @endphp</h2>
    <div class="sm:text-xl lg:text-lg xl:text-xl entry-content">@php the_field('contact_description') @endphp</div>
    <div class="h-px"></div>
    <div>
      @php $item = get_field('contact_link'); @endphp
      <a
        title="@php echo $item['title'] @endphp"
        href="@php echo $item['url'] @endphp" 
        class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-brand relative group sm:text-xl lg:text-lg xl:text-xl">
        <span class="border-t-2 -mt-px border-brand-darker block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
        @php echo $item['title'] @endphp
      </a>
    </div>
  </div>
</section>