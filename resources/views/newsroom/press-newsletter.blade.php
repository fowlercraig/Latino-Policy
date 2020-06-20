<div class="container text-center">
  <h2 class="mt-1 text-4xl tracking-tight leading-10 font-bold text-brand sm:leading-none sm:text-6xl md:text-4xl lg:text-5xl">
    @php the_field('subscribe_headline','options'); @endphp
  </h2>
  <div class="mt-5 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left">
    @include('partials.mailchimp')
    <p class="mt-3 text-sm leading-5 text-gray-500">
      We care about the protection of your data. Read our
      <a href="http://www.ucla.edu/terms-of-use/" class="font-medium text-gray-900 underline">Terms of Use</a>.
    </p>
  </div>
</div>