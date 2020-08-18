@php $padding = 'pt-6' @endphp

<div class="flex items-center font-medium space-x-1 prose @endphp">
  <span class="text-brand-light">Event Date →</span>
  <span class="text-white"><?php the_field('event_date'); ?></span>
</div>

<div class="divide-y divide-white divide-opacity-25 space-y-6"> 

  <div class="prose prose-sm sm:prose lg:prose-lg @endphp @php echo $padding @endphp">
    <div class="text-brand-lighter">@php echo get_the_excerpt() @endphp</div>
  </div>

  @include('partials.entry-experts',['textColor' => 'text-white' ])
  @include('partials.entry-download',['textColor' => 'text-white' ])

</div>