<?php return array (
  'user-relation-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'u.id',
          1 => 'u.username',
          2 => 'u.email',
          3 => 'u.firstName',
          4 => 'u.lastName',
          5 => 'u.enabled',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
            'alias' => 'u',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'username' => 
        array (
          'data_name' => 'u.username',
        ),
        'email' => 
        array (
          'data_name' => 'u.email',
        ),
        'firstName' => 
        array (
          'data_name' => 'u.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'u.lastName',
        ),
      ),
      'disable_default_sorting' => true,
    ),
    'filters' => 
    array (
    ),
  ),
);