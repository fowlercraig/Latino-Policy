@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('people.people-header')
    <div class="container pt-6 lg:pt-10 space-y-10">
      @include('partials.header-card',['title' => get_field('section_title'),'textColor' => 'text-brand-darker'])
      @include('people.people-staff',['query' => get_field('section_staff')])
      <div class="h-px bg-gray-100"></div>
      @include('partials.header-card',['title' => get_field('section_title_voting'),'textColor' => 'text-brand-darker'])
      @include('people.people-staff',['query' => get_field('section_staff_voting')])
      @include('partials.back')
    </div>
  @endwhile
@endsection
