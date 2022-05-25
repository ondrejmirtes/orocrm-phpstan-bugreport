<?php return array (
  'bu-view-users-grid' => 
  array (
    'extends' => 'user-relation-grid',
    'options' => 
    array (
      'entityHint' => 'oro.user.entity_plural_label',
    ),
    'acl_resource' => 'oro_business_unit_view',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => ':business_unit_id MEMBER OF u.businessUnits',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'business_unit_id',
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
      'default' => 
      array (
        'lastName' => 'ASC',
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