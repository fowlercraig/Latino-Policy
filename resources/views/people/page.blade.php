@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.page-header-people')

    <div class="md:space-y-20">
      <section id="staff"></section>
      @include('partials.people.query')
      @include('partials.page-back')
    </div>

  @endwhile
@endsection
