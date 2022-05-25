<?php return array (
  'role-users-grid' => 
  array (
    'extends' => 'user-relation-grid',
    'acl_resource' => 'oro_user_role_update',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '(CASE WHEN (:role_id IS NOT NULL) THEN
  CASE WHEN (:role_id MEMBER OF u.userRoles OR u.id IN (:data_in)) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN u.id IN (:data_in) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as has_role
',
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'role_id',
          'default' => NULL,
        ),
      ),
    ),
    'columns' => 
    array (
      'has_role' => 
      array (
        'label' => 'oro.user.role.has_role.label',
        'editable' => true,
        'frontend_type' => 'boolean',
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
    'filters' => 
    array (
      'columns' => 
      array (
        'has_role' => 
        array (
          'type' => 'boolean',
          'data_name' => 'has_role',
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
    'sorters' => 
    array (
      'multiple_sorting' => true,
      'columns' => 
      array (
        'has_role' => 
        array (
          'data_name' => 'has_role',
        ),
      ),
      'default' => 
      array (
        'has_role' => 'DESC',
        'lastName' => 'ASC',
      ),
    ),
    'options' => 
    array (
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'has_role',
        'selectors' => 
        array (
          'included' => '#roleAppendUsers',
          'excluded' => '#roleRemoveUsers',
        ),
      ),
    ),
  ),
);