<?php return array (
  'user-cases-grid' => 
  array (
    'extends' => 'base-cases-with-relations-grid',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => '(assignedTo.id = :id OR owner.id = :id)',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'id',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => false,
    ),
  ),
);