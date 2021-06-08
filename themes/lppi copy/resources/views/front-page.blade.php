@extends('layouts.home')
@section('content')
  {{-- Carousel --}}
  @include('partials.list-hero')
  {{-- Spacer --}}
  <div class="h-2"></div>
  {{-- Mission --}}
  @include('partials.mission-banner')
  {{-- Spacer --}}
  <div class="h-2"></div>
  {{-- Latest Research --}}
  @include('partials.list-research',['title'=>'Recent Projects & Reports', 'limit'=>4])
  {{-- Spacer --}}
  <div class="h-0 md:h-12 xl:h-20"></div>
  {{-- Voting Rights Project Banner --}}
  @include('partials.banner-vrp')
  {{-- Spacer --}}
  <div class="h-5 md:h-12 xl:h-20"></div>
  {{-- Latest News --}}
  @include('partials.list-news')
  {{-- Spacer --}}
  <div class="h-5 md:h-12 xl:h-20"></div>
  {{-- Donation Banner --}}
  @include('partials.banner-donate',[
    'title' => get_field('donate_eyebrow'),
    'desc'  => get_field('donate_content')
  ])
  {{-- Subscribe Popup --}}
  @include('partials.modal-subscribe')

@endsection