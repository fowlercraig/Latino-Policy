@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())

  <div class="container py-20">
    
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>

    <?php echo do_shortcode( '[searchandfilter post_types="press,research,event" operators="OR,OR,OR,OR,OR" class="bg-gray-100 p-10 entry-content" show_count="1,1,1,1,1" fields="post_types,issue,resource,section" types="checkbox,checkbox,checkbox,checkbox,checkbox" headings="Post Type,Issues,Resources,Sections"]' ); ?>

  </div>

  @endif
@endsection
