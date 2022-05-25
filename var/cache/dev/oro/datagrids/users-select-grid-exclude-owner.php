<?php return array (
  'users-select-grid-exclude-owner' => 
  array (
    'extends' => 'users-select-grid',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'u.id != @oro_security.token_accessor->getUserId',
          ),
        ),
      ),
    ),
  ),
);