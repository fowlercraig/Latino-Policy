@php
  $classes = 'pb-2 block hover:text-gray-900 transition ease duration-150'
@endphp

<footer class="border-t border-gray-100 py-20 px-2 md:px-10 mt-20 text-gray-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex flex-wrap space-y-6 lg:space-y-0">
      
      <div class="w-full w-full lg:w-1/3 text-sm space-y-4">
        <a class="brand block mb-3 w-1/2" href="{{ home_url('/') }}" title="Opens in the same window">
          <img alt="{{ get_bloginfo('name', 'display') }}" class="w-full" src="@asset('images/Bxd_Blk_LPPI_Luskin_D.svg')">
        </a>
        <p><?php the_field('statement','option'); ?></p>
        <p><?php the_field('address','option'); ?></p>
      </div>

      <div class="flex flex-wrap w-full lg:w-2/3">

        <ul class="w-1/2 lg:w-1/3 text-sm">
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(14); @endphp"  title="Opens @php echo get_the_title(14); @endphp in the same window">@php echo get_the_title(14); @endphp</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(14); @endphp"  title="Opens Archive in the same window">Archive</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(280); @endphp" title="Opens @php echo get_the_title(280); @endphp in the same window">@php echo get_the_title(280); @endphp</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(16); @endphp"  title="Opens @php echo get_the_title(16); @endphp in the same window">@php echo get_the_title(16); @endphp</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(38); @endphp"  title="Opens @php echo get_the_title(38); @endphp in the same window">@php echo get_the_title(38); @endphp</a></li>
        </ul>

        <ul class="w-1/2 lg:w-1/3 text-sm">
          <li><a class="@php echo $classes; @endphp" href="/research" title="Opens @php echo get_the_title(282); @endphp in same window">@php echo get_the_title(282); @endphp</a></li>
          <li><a class="@php echo $classes; @endphp" href="/press" title="Opens @php echo get_the_title(284); @endphp in same window">@php echo get_the_title(284); @endphp</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(14); @endphp"  title="Opens Careers in same window">Careers</a></li>
          <li><a class="@php echo $classes; @endphp" href="@php echo get_permalink(14); @endphp"  title="Opens Campus Resources in same window">Campus Resources</a></li>
        </ul>

        <div class="w-full w-full lg:w-1/3 text-sm space-y-4 pt-6 lg:pt-0">
          <p><?php the_field('subscribe_title','option'); ?></p>
          <div><?php the_field('subscribe_widget','option'); ?></div>
          <ul class="space-x-2">
            <?php $icons = 'height="18" width="18" fill="#fff" stroke="none"' ?>
            <?php $icons2 = 'height="18" width="18" stroke="#ffffff"' ?>
            <li class="inline-flex h-6 w-6 rounded bg-blue-800 items-center justify-center">
              <a href="<?php the_field('facebook','option'); ?>" title="Opens Facebook in a new window"><i <?php echo $icons; ?> data-feather="facebook"></i></a>
            </li>
            <li class="inline-flex h-6 w-6 rounded bg-blue-800 items-center justify-center">
              <a href="<?php the_field('instagram','option'); ?>" title="Opens Instagram in a new window"><i <?php echo $icons2; ?> data-feather="instagram"></i></a>
            </li>
            <li class="inline-flex h-6 w-6 rounded bg-blue-800 items-center justify-center">
              <a href="<?php the_field('twitter','option'); ?>" title="Opens Twitter in a new window"><i <?php echo $icons; ?> data-feather="twitter"></i></a>
            </li>
            <li class="inline-flex h-6 w-6 rounded bg-blue-800 items-center justify-center">
              <a href="<?php the_field('youtube','option'); ?>" title="Opens Youtube in a new window"><i <?php echo $icons2; ?> data-feather="youtube"></i></a>
            </li>
            <li class="inline-flex h-6 w-6 rounded bg-blue-800 items-center justify-center">
              <a href="<?php the_field('linkedin','option'); ?>" title="Opens LinkedIn in a new window"><i <?php echo $icons; ?> data-feather="linkedin"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>

<div class="border-t border-gray-100 py-4 px-2 md:px-10 text-gray-500 text-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <nav class="text-sm md:space-x-4 space-y-2 md:space-y-0">
      <a class="block md:inline" href="http://www.universityofcalifornia.edu/" title="Opens Facebook in a new window">© 2020 Regents of the University of California</a>
      <a class="block md:inline" href="http://www.ucla.edu/terms-of-use" title="Opens Facebook in a new window">Terms of Use</a>
      <a class="block md:inline" href="http://www.ucla.edu/accessibility" title="Opens Facebook in a new window">Accessibility</a>
      <a class="block md:inline" href="https://ucla-gme-advocate.symplicity.com/public_report" title="Opens Facebook in a new window">Report Misconduct</a>
    </nav>
  </div>
</div>