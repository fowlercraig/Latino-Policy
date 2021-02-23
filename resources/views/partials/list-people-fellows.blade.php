@notempty($in)
  @set($notin,'')
  @set($years,'')
  @set($filter,get_field('title'))
  {{-- Current Policy Fellows --}}
@endnotempty

@notempty($notin)
  @set($in,'')
  @set($years,get_field('sort_years',3787))
  @set($filter,get_field('graduation_year'))
  {{-- Alumni Fellows --}}
@endnotempty

@query([
  'post_type'       => array('people'),
  'posts_per_page'  => -1,
  'order'           => 'DESC',
  'tax_query'       => array(
    array(
      'taxonomy'     => 'role',
      'field'        => 'slug',
      'terms'        => 'fellows'
    )
  ),
  'post__in'        => $in,
  'post__not_in'    => $notin,
])

@hasposts
  <section class="iso-{{ $section }}">
    <div class="container space-y-6">
      @include('components.section-header',['title'=>$title])
      @includeFirst(['components.filter-'.$section])
      <div id="isotope" class="isotope flex flex-wrap -m-2 md:-m-3 xl:-m-5">
        @posts
          <div class="iso-person w-1/4 p-2 md:p-3 xl:p-5 filter-{{ preg_replace('/\s*/', '', $filter) }}">
            @include('components.item-people')
          </div>
        @endposts
      </div>
    </div>
  </section>
@endhasposts