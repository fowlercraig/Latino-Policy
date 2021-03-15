@php 
  
  $experts = get_field('experts_research','option');
  $values = [];

  foreach($experts as $expert) { 
    $values[] = array(
      'label' => get_the_title( $expert->ID ),
      'value' => $expert->ID
    );
  } 

  $issues = get_field('issues_research','option');
  $issue_values = [];

  foreach($issues as $term) { 
    $issue_values[] = array(
      'label' => $term->name,
      'value' => $term->slug
    );
  } 

  $resources = get_field('resources_research','option');
  $resource_values = [];

  foreach($resources as $resource) { 
    $resource_values[] = array(
      'label' => $resource->name,
      'value' => $resource->slug
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
            "section_toggle" =>  "true",
        ),
        array(
            "key"           =>  "taxonomy",
            "field_type"    =>  "radio",
            "taxonomy"      =>  "issue",
            "taxonomy_operator" =>  "IN",
            "title"         =>  "Issues",
            "values"        =>  $issue_values,
            "section_toggle" =>  "true",
        ),
        array(
            "key"               =>  "meta",
            "field_type"        =>  "radio",
            "meta_key"          =>  "people",
            "meta_operator"     =>  "LIKE",
            "meta_type"         =>  "CHAR",
            "acf"               =>  true,
            "title"             =>  "Experts",
            "values"            =>  $values,
            "section_toggle"    =>  "true",
        )
    ),
  );
  echo alm_filters($filter_array, 'your_alm_id');
@endphp
