@php 
  $experts = get_posts(array(
    'post_type'      => 'people',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'menu_order',
    'tax_query'      => array(
      array(
        'taxonomy'   => 'role',
        'field'      => 'slug',
        'terms'      => 'experts',
      )
    )
  ));
  $experts_values = [];
  $experts_values[] = array(
    'label' => 'All Experts',
    'value' => ''
  );
  foreach($experts as $expert) { 
    $experts_values[] = array(
      'label' => get_the_title( $expert->ID ),
      'value' => $expert->ID,
    );
  }

  $sections = get_field('work','option');
  $sections_values = [];

  foreach($sections as $term) { 
    $sections_values[] = array(
      'label' => $term->name,
      'value' => $term->slug
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

  //$terms = get_categories($args);  
  $filter_array = array(
    "id" =>  "filter_types",
    "style" =>  "change",
    "date_created" =>  1613608253,
    "date_modified" =>  1613609191,
    "reset_button" =>  true,
    "reset_button_label" =>  "Reset Filters",
    "filters" =>  array(
      array(
        "key"           =>  "taxonomy",
        "field_type"    =>  "radio",
        "taxonomy"      =>  "section",
        "taxonomy_operator" =>  "IN",
        "title"         =>  "Work",
        //"values"        =>  $sections_values,
        "section_toggle" =>  "true",
      ),
      array(
        "key"           =>  "taxonomy",
        "field_type"    =>  "radio",
        "taxonomy"      =>  "resource",
        "taxonomy_operator" =>  "IN",
        "title"         =>  "Resource Types",
        //"values"        =>  $resource_values,
        "show_count"    =>  true,
        "section_toggle" =>  "true",
      ),
      array(
        "key"           =>  "taxonomy",
        "field_type"    =>  "radio",
        "taxonomy"      =>  "issue",
        "taxonomy_operator" =>  "IN",
        "title"         =>  "Issues",
        //"values"        =>  $issue_values,
        "show_count"    =>  true,
        "section_toggle" =>  "true",
      ),
      array(
        "key"               =>  "meta",
        "field_type"        =>  "select",
        "meta_key"          =>  "contributors",
        "meta_operator"     =>  "LIKE",
        "meta_type"         =>  "CHAR",
        "acf"               =>  true,
        "title"             =>  "Experts",
        "values"            =>  $experts_values,
        "show_count"    =>  true,
        "section_toggle"    =>  "true",
      )
    )
  );
  echo alm_filters($filter_array, $id);
@endphp