<?php return array (
  'users-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
    'options' => 
    array (
      'entityHint' => 'oro.user.entity_plural_label',
      'entity_pagination' => true,
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
      'routerEnabled' => false,
    ),
    'acl_resource' => 'oro_user_user_view',
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
        'where' => 
        array (
          'and' => 
          array (
            0 => 'u.id != @oro_security.token_accessor->getUserId',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.user.id.label',
      ),
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
      'enabled' => 
      array (
        'label' => 'oro.user.enabled.label',
        'frontend_type' => 'select',
        'choices' => 
        array (
          'oro.user.datagrid.user.columns.disabled' => 0,
          'oro.user.datagrid.user.columns.enabled' => 1,
        ),
      ),
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
        'enabled' => 
        array (
          'data_name' => 'u.enabled',
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
        'enabled' => 
        array (
          'type' => 'boolean',
          'data_name' => 'u.enabled',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.user.datagrid.user.filters.disabled' => 2,
                'oro.user.datagrid.user.filters.enabled' => 1,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);