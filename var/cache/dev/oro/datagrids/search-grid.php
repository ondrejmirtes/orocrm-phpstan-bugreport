<?php return array (
  'search-grid' => 
  array (
    'source' => 
    array (
      'type' => 'search',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'text.system_entity_name as name',
        ),
      ),
    ),
    'columns' => 
    array (
      'entity' => 
      array (
        'label' => 'Item',
        'type' => 'search-result',
        'template' => NULL,
        'frontend_type' => 'html',
      ),
    ),
    'properties' => NULL,
    'sorters' => NULL,
    'filters' => NULL,
  ),
);