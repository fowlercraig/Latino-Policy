@extends('layouts.home')
@section('content')
  {{-- Carousel --}}
  @include('partials.list-hero')
  {{-- Mission --}}
  @include('partials.mission-banner')
  {{-- Latest Research --}}
  @include('partials.list-research')
  {{-- Spacer --}}
  <div class="h-8 md:h-12 xl:h-20"></div>
  {{-- Voting Rights Project Banner --}}
  @include('partials.vrp-banner')
  {{-- Spacer --}}
  <div class="h-8 md:h-12 xl:h-20"></div>
  {{-- Latest News --}}
  @include('partials.list-news')
  {{-- Spacer --}}
  <div class="h-8 md:h-12 xl:h-20"></div>
  {{-- Donation Banner --}}
  @include('partials.donate-banner',[
    'title' =>'Join Us in Expanding <br> Opportunity for All Americans',
    'desc'  =>'Your gift will help us inform meaningful policy change that improves the economic, political, and social landscape for Latinos and other communities of color.'
  ])
  {{-- Subscribe Popup --}}
  @include('partials.modal-subscribe')

@endsection
