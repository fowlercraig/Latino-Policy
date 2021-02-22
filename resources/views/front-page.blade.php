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
  @include('partials.list-research',['title'=>'Recent Projects & Reports'])
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
    'title' =>'Join Us in Expanding <br> Opportunity for All Americans',
    'desc'  =>'<p>Your gift will help us inform meaningful policy change that improves the economic, political, and social landscape for Latinos and other communities of color.</p>'
  ])
  {{-- Subscribe Popup --}}
  @include('partials.modal-subscribe')

@endsection
