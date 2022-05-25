<?php return array (
  'users-calendar-select-grid-exclude-owner' => 
  array (
    'acl_resource' => 'oro_user_user_view',
    'options' => 
    array (
      'entityHint' => 'oro.calendar.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'calendar.id as id',
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
            'table' => 'Oro\\Bundle\\CalendarBundle\\Entity\\Calendar',
            'alias' => 'calendar',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'calendar.owner',
              'alias' => 'u',
            ),
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
      'username' => 
      array (
        'label' => 'oro.user.username.label',
      ),
      'email' => 
      array (
        'label' => 'oro.user.email.label',
      ),
      'firstName' => 
      array (
        'label' => 'oro.user.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.user.last_name.label',
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
        'username' => 
        array (
          'type' => 'string',
          'data_name' => 'u.username',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'u.email',
        ),
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