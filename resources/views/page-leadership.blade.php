@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')
    <div class="space-y-20 relative z-40">
      @include('partials.page-content')
    </div>
    <!-- Overview -->
    <div class="text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="py-10 flex flex-wrap">
          <div class="lg:w-1/3">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
              <?php the_field('overview_title'); ?>
            </h2>
          </div>
          <div class="lg:w-2/3">
            <p class="mb-0 text-gray-600"><?php the_field('overview_desc'); ?></p>
          </div>
        </div>
      </div>
      <!-- Overview -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="border-t border-black-5 py-10 flex flex-wrap">
          <div class="lg:w-1/3">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
              <?php the_field('program_title'); ?>
            </h2>
          </div>
          <div class="lg:w-2/3">
            <p class="mb-0 text-gray-600"><?php the_field('program_desc'); ?></p>
          </div>
        </div>
      </div>
      <!-- Overview -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="border-t border-black-5 py-10 flex flex-wrap">
          <div class="lg:w-1/3">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
              <?php the_field('process_title'); ?>
            </h2>
          </div>
          <div class="lg:w-2/3">
            <p class="mb-0 text-gray-600"><?php the_field('process_desc'); ?></p>
          </div>
        </div>
      </div>
      <!-- FAQ -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="border-t border-black-5 py-10 flex flex-wrap">
          <div class="lg:w-1/3">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10">
              <?php the_field('faq_title'); ?>
            </h2>
          </div>
          <div class="lg:w-2/3">
            <div  x-data="{ openPanel: 1 }">
              <?php
              $items = get_field('faq');
              foreach ($items as $item):
              ?>
              <div class="border-b border-black-5 mb-3 entry-content">
                <h2 class="font-bold mb-0"><?php echo $item['question']; ?></h2>
                <p class="mb-0 text-gray-600 py-3"><?php echo $item['answer']; ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endwhile
@endsection
