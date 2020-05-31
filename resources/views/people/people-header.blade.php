<div class="bg-brand">
  <div class="container py-3 font-medium space-x-6">
    @php $member_group_terms = get_terms( 'role' ); @endphp
    @foreach ( $member_group_terms as $member_group_term )
    <a 
      class="py-1 text-white inline-block transition duration-300 ease hover:text-white-75" 
      title="Opens @php echo $member_group_term->name; @endphp page in same window" 
      href="/people/@php echo $member_group_term->name; @endphp">@php echo $member_group_term->name; @endphp</a>
    @endforeach
  </div>
</div>