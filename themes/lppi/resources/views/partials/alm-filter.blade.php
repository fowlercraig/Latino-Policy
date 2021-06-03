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

  $filter_array = array(
    "id" =>  "filter_types",
    "style" =>  "change",
    "date_created" =>  1613608253,
    "date_modified" =>  1613609191,
    "reset_button" =>  true,
    "filters" =>  array(
      array(
        "key"               =>  "taxonomy",
        "field_type"        =>  "checkbox",
        "taxonomy"          =>  "resource",
        "taxonomy_operator" =>  "IN",
        "section_toggle"    =>  "true",
        "title"             =>  "Resource Types",
        "classes"           =>  "text-sm"
      ),
      array(
        "key"               =>  "taxonomy",
        "field_type"        =>  "checkbox",
        "taxonomy"          =>  "issue",
        "taxonomy_operator" =>  "IN",
        "title"             =>  "Issues",
        "section_toggle"    =>  "true",
        "classes"           =>  "text-sm"
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
        "section_toggle"    =>  "true",
      )
    )
  );
  echo alm_filters($filter_array, $id);
@endphp