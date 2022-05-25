<?php return array (
  'owner-users-select-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
    'options' => 
    array (
      'entityHint' => 'oro.user.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'u.id',
          1 => 'u.email',
          2 => 'u.username',
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
        'where' => 
        array (
          'and' => 
          array (
            0 => 'u.enabled=true',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'firstName' => 
      array (
        'label' => 'oro.user.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.user.last_name.label',
      ),
      'email' => 
      array (
        'label' => 'oro.user.email.label',
      ),
      'username' => 
      array (
        'label' => 'oro.user.username.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'data_name' => 'u.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'u.lastName',
        ),
        'email' => 
        array (
          'data_name' => 'u.email',
        ),
        'username' => 
        array (
          'data_name' => 'u.username',
        ),
      ),
      'default' => 
      array (
        'username' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'u.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'u.lastName',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'u.email',
        ),
        'username' => 
        array (
          'type' => 'string',
          'data_name' => 'u.username',
        ),
      ),
    ),
  ),
);