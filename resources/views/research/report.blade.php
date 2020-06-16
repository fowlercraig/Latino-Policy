<div id="parent-@php the_ID(); @endphp" class="parent-page relative hover:z-40" data-aos="fade-up">
  <div class="transform transition duration-300 ease group hover:-translate-y-1 hover:scale-105 hover:shadow-xl relative">
    <a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" class="inset-0 absolute z-50"><span class="sr-only">@php the_title(); @endphp</span></a>
    <div class="block space-y-2">
      @if (has_post_thumbnail())
      <div class="bg-gray-900">
      @else
      @php 
        $rdiv = array("bg-brand", "bg-brand-dark", "bg-brand-darker"); 
        $rand_keys = array_rand($rdiv, 1); 
      @endphp
      <div class="@php echo $rdiv[$rand_keys]; @endphp duration-300 ease group-hover:bg-brand-dark">
      @endif
        <div class="relative aspect-ratio aspect-ratio--1x1 md:aspect-ratio--16x9 @if ( $count == 3)lg:aspect-ratio--3x4 @else lg:aspect-ratio--7x5 @endif overflow-hidden">
          <div class="absolute inset-0 p-4 pt-0 sm:p-8 sm:pt-0 space-y-2 sm:space-y-6 z-20 flex flex-col">
            <div class="text-xs sm:text-base space-x-px">
              <div class="bg-brand inline-block py-1 px-2">
                @php if(get_the_terms(get_the_ID(), 'resource')): @endphp
                <span class="text-white font-medium">@php echo get_the_terms(get_the_ID(), 'resource')[0]->name; @endphp</span>
                <span class="text-white font-medium">→</span>
                @php endif; @endphp
                @php if(get_the_terms(get_the_ID(), 'issue')): @endphp
                <span class="text-white font-medium">@php echo get_the_terms(get_the_ID(), 'issue')[0]->name; @endphp</span>
                @php endif; @endphp
              </div>
            </div>
            <h2 class="font-display uppercase text-3xl sm:text-3xl xl:text-5xl leading-7 sm:leading-10 xl:leading-13 font-bold tracking-tight text-white">
              <span class="bg-transparent group-hover:bg-brand-darker transition ease duration-150 py-1">@php the_title(); @endphp</span>
            </h2>
            <div class="flex-grow"></div>
            <div>
              <div
                class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white relative group">
                <span class="border-t-2 -mt-px border-white block absolute inset-x-0 top-0 w-0 group-hover:w-full transition-all duration-150 ease-in"></span>
                Learn more
              </div>
            </div>
          </div>
          <div class="absolute inset-0">
            @php the_post_thumbnail( 'large', array( 'class' => 'opacity-25 group-hover:opacity-50 object-cover transition ease duration-300 w-full h-full' ) ); @endphp
          </div>
        </div>
      </div>
    </div>
  </div>
</div>