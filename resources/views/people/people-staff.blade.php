@php
  $featured_posts = $query;
@endphp

  <section id="experts-@php echo $member_group_term->name; @endphp">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 lg:gap-12">

      @foreach( $featured_posts as $p )
      @php setup_postdata($post) @endphp
      @include('people.person-card',[
        'title' => get_field('section_title_voting'),
        'textColor' => 'text-brand-darker'
      ])
      @endforeach

    </div>
  </section>
  
  @php wp_reset_postdata(); @endphp



