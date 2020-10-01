@php 
  
  $experts = get_field('experts','option');
  $values = [];

  foreach($experts as $expert) { 
    $values[] = array(
      'label' => get_the_title( $expert->ID ),
      'value' => $expert->ID
    );
  } 

  $issues = get_field('issues','option');
  $issue_values = [];

  foreach($issues as $term) { 
    $issue_values[] = array(
      'label' => $term->name,
      'value' => $term->slug
    );
  } 

  $resources = get_field('resources','option');
  $resource_values = [];

  foreach($resources as $resource) { 
    $resource_values[] = array(
      'label' => $resource->name,
      'value' => $resource->slug
    );
  } 

  $works = get_field('work','option');
  $work_values = [];

  foreach($works as $work) { 
    $work_values[] = array(
      'label' => $work->name,
      'value' => $work->slug
    );
  } 

  $terms = get_categories($args);  
  $filter_array = array(
    "id" =>  "testing",
    "style" =>  "change",
    "date_created" =>  1598996575,
    "date_modified" =>  1598996724,
    "filters" =>  array(
        array(
            "key"           =>  "taxonomy",
            "field_type"    =>  "radio",
            "taxonomy"      =>  "resource",
            "taxonomy_operator" =>  "IN",
            "title"         =>  "Resource Types",
            "values"        =>  $resource_values,
        ),
        array(
            "key"           =>  "taxonomy",
            "field_type"    =>  "radio",
            "taxonomy"      =>  "issue",
            "taxonomy_operator" =>  "IN",
            "title"         =>  "Issues",
            "values"        =>  $issue_values,
        ),
        array(
            "key"           =>  "meta",
            "field_type"    =>  "radio",
            "meta_key"      =>  "people",
            "meta_operator" =>  "IN",
            "meta_type"     =>  "CHAR",
            "title"         =>  "Experts",
            "values"        =>  $values,
        )
    )
  );
  echo alm_filters($filter_array, 'your_alm_id');
@endphp
