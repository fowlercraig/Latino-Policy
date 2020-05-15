@if( have_rows('page_content') )
@php while( have_rows('page_content') ): the_row(); @endphp

@if( get_row_layout() == 'image_text' )
  @if (is_front_page())
    @include('partials.home.image_text')
  @else
    @include('partials.builder.image_text')
  @endif
@endif

@if( get_row_layout() == 'featured_reports' )
  @if (is_front_page())
    @include('partials.home.featured_reports')
  @else
    @include('partials.builder.featured_reports')
  @endif
@endif


@if( get_row_layout() == 'featured_news' )
@include('partials.builder.featured_news')
@endif

@if( get_row_layout() == 'featured_experts' )
@include('partials.builder.featured_experts')
@endif

@if( get_row_layout() == 'research_library' )
@include('partials.builder.research_library')
@endif

@if( get_row_layout() == 'voting_rights' )
@include('partials.builder.voting_rights')
@endif

@if( get_row_layout() == 'need_know' )
@include('partials.builder.need_know')
@endif

@if( get_row_layout() == 'donate_module' )
@include('partials.home.donate')
@endif

@php endwhile; @endphp
@endif