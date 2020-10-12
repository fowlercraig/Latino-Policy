@php 

  $issues = get_field('issues','option');
  $issue_values = [];

  $issue_values[] = array(
    'label' => 'All Issues',
    'value' => ''
  );

  foreach($issues as $term) { 
    $issue_values[] = array(
      'label' => $term->name,
      'value' => $term->slug
    );
  } 

  $terms = get_categories($args);  
  $filter_array = array(
    "id" =>  "experts_filters",
    "style" =>  "change",
    "filters" =>  array(
        array(
            "key"           =>  "taxonomy",
            "field_type"    =>  "checkbox",
            "taxonomy"      =>  "issue",
            "taxonomy_operator" => "IN",
            "title"         =>  "Issues",
            "values"        =>  $issue_values,
            "classes"       =>  "no-collapse"
        ),
    )
  );
  echo alm_filters($filter_array, 'experts');
@endphp
