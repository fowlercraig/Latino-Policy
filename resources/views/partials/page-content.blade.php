@if( have_rows('page_content') )
@php while( have_rows('page_content') ): the_row(); @endphp

@if( get_row_layout() == 'image_text' )
@include('partials.builder.image_text')
@endif

@if( get_row_layout() == 'featured_reports' )
@include('partials.builder.featured_reports')
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

@php endwhile; @endphp
@endif