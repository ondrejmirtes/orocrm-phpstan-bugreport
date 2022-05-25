<?php return array (
  'oro-locale-localizations-select-grid' => 
  array (
    'extends' => 'oro-locale-localizations-grid',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'l.id NOT IN (:ids)',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'ids',
          'default' => 
          array (
            0 => 0,
          ),
        ),
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => false,
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'actions' => NULL,
  ),
);