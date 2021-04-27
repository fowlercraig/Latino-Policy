{{--
  Template Name: Immersive Report
  Template Post Type: research
--}}

@extends('layouts.immsersive')

@section('content')
  @while(have_posts()) @php(the_post())

    <div>
      <div class="h-[90vh] bg-brand-dark text-white flex items-end py-12 relative">
        <div class="absolute inset-0 relative">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-black to-transparent opacity-50"></div>
          @image(get_post_thumbnail_id(), 'full', ['alt' => 'Hello', 'class' => 'w-full h-full object-cover object-center'])
        </div>
        <div class="container relative">
          <div class="">
            @includeFirst(['components.eyebrow-'.get_post_type(), 'components.eyebrow'])
            <h1 class="tracking-[100%] md:tracking-[100%] xl:tracking-[100%] font-bold text-5xl md:text-7xl xl:text-8xl font-primary-a uppercase">@title</h1>
          </div>
        </div>
      </div>
      <div class="h-3 bg-brand-lightest"></div>
      @set($contributors, get_field('contributors'))
      @if($contributors)
        <div class="max-w-screen-lg mx-auto">
          <div class="font-medium bg-brand-lightest pb-1 px-3 space-x-1 inline-flex text-brand-dark">
            <span>By:</span>
            <ul class="font-medium bg-brand-lightest inline-flex space-x-1 ">
              @foreach( $contributors as $contributor )
                <li><a class="hover:underline" href="@permalink($contributor)">@title($contributor)</a>,</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
    </div>
  
    <div class="immersive space-y-6 container prose mx-auto max-w-none">
      @layouts('sections_sections')
        
        @layout('text_area')
          @sub('text_content')
        @endlayout

        @layout('download')
          <div class="p-16 lg:@sub('align') max-w-2xl">
            <div class="border-t border-b border-brand-lighter py-6 space-y-3">
              <div class="font-medium text-sm text-brand-light">@sub('eyebrow')</div>
              <div class="font-bold text-2xl text-brand-dark leading-tight">@sub('description')</div>
              <a href="@sub('file','url')" class="inline-flex font-medium text-sm text-brand-dark items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                <span>@sub('file','title')</span>
              </a>
            </div>
          </div>
        @endlayout

        @layout('pullquote')
          <div class="p-16 lg:@sub('align') max-w-2xl">
            <div class="bg-brand-lightest p-6">
              <blockquote class="tracking-tighter font-bold text-4xl font-primary-a uppercase">"@sub('quote')"</blockquote>
              <span class="font-medium">— @sub('attribution')</span>
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
      <div class="max-w-screen-lg mx-auto border-t py-10 space-y-6">
        @include('components.section-header',['title'=>'Contributors'])
        @includeFirst(['components.entry-contributors-immersive', 'components.entry-contributors'],[
          'textColor' => 'text-brand-dark'
        ])
      </div>
    </div>

    <footer class="space-y-5 md:space-y-12 xl:space-y-20 bg-brand-lightest py-5 md:py-12 xl:py-20">
      @set($issues, get_the_terms(get_the_ID(), 'issue'))
      @include('partials.list-research',[
        'title' => 'More on '.$issues[0]->name.' ', 
        'url'   => '/research/',
        'cta'   => 'Visit the Research Library', 
        'limit' => 4,
        'tax'   => $issues[0]->slug
        ])
      @include('partials.list-people',[
        'title' =>'Related Experts', 
        'limit' => 4,
        'url'   => '/people/experts/',
        'cta'   => 'More Experts',  
        'tax'   => $issues[0]->slug
      ])
    </footer>

    <div class="hidden">
      <div class="lg:float-left lg:float-right"></div>
    </div>

  @endwhile
@endsection
