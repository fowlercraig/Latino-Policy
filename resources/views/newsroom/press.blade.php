@php $image = get_field('press_image'); @endphp
@php $link  = get_field('press_link'); @endphp
<div class="container">
  <section id="press-release" class="bg-brand-darker">
    <div class="sm:grid grid-cols-5 items-center">
      <div class="col-span-3 aspect-ratio aspect-ratio--16x9 sm:aspect-ratio--1x1 md:aspect-ratio--16x9 bg-gray-900 sm:order-last relative">
        <div class="absolute inset-0">
          @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'object-cover transition ease duration-300 w-full h-full' ) ); @endphp
        </div>
      </div>
      <div class="col-span-2 space-y-4 p-8">
        <h2 class="text-2xl sm:text-3xl xl:text-5xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10 xl:leading-13">@php the_field('press_title') @endphp</h2>
        <div class="text-gray-300">@php the_field('press_description') @endphp</div>
        <div>
          <a
            class="inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-white"
            title="Opens @php echo $link['title'] @endphp in the same window"  
            href="@php echo $link['url'] @endphp"  
          >@php echo $link['title'] @endphp</a>
        </div>
      </div>
    </div>
  </section>
</div>