@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag"]' ); ?>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
