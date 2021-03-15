{{--
  Template Name: Immersive Report
  Template Post Type: research
--}}

@extends('layouts.immsersive')

@section('content')
  @while(have_posts()) @php(the_post())

    <div>
      <div class="h-header bg-brand-dark text-white flex items-end py-12">
        <div class="container">
          <div class="">
            <h1 class="tracking-tight font-bold text-4xl md:text-6xl xl:text-7xl font-primary-a uppercase">@title</h1>
          </div>
        </div>
      </div>
      <div class="h-3 bg-brand-lightest"></div>
    </div>
  
    <div class="immersive space-y-10">
      @layouts('sections_sections')
        
        @layout('text_area')
          <div class="container">
            <div class="prose mx-auto max-w-screen-md">
              @sub('text_content')
            </div>
          </div>
        @endlayout

        @layout('pullquote')
          <div class="prose mx-auto max-w-screen-md">
            <div class="bg-brand-lightest p-6">
              <blockquote class="tracking-tighter font-bold text-4xl font-primary-a uppercase">"@sub('quote')"</blockquote>
              <span>— @sub('attribution')</span>
            </div>
          </div>
          @style
            .immersive blockquote {
              color: #003c5f;
              margin: 0;
              font-style: normal;
              padding: 0;
              border: 0;
            }
          @endstyle
        @endlayout

        @layout('gallery')
          <div class="container py-12">
            <div class="aspect-w-16 aspect-h-9 bg-gray-900 text-gray-500 relative">
              <div class="absolute inset-0 flex items-center justify-center">
                Images go here.
              </div>
            </div>
          </div>
        @endlayout

        @layout('full_width_image')
          <div class="py-12">
            <div class="aspect-w-16 aspect-h-9 bg-gray-900 text-gray-500 relative">
              <div class="absolute inset-0 flex items-center justify-center">
                Images go here.
              </div>
            </div>
          </div>
        @endlayout

        @layout('video')
          <div class="container py-12">
            <div class="videoWrapper">@sub('video')</div>
            @style
              .videoWrapper {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                height: 0;
              }
              .videoWrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
              }
            @endstyle
          </div>
        @endlayout

      @endlayouts
    </div>

    <div class="container">
      <div class="max-w-screen-md mx-auto border-t py-10">
        <div class="h-64 bg-gray-50"></div>
      </div>
    </div>

  @endwhile
@endsection
