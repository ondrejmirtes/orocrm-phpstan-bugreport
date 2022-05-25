<?php return array (
  'group-users-grid' => 
  array (
    'extends' => 'user-relation-grid',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '(CASE WHEN (:group_id IS NOT NULL) THEN
  CASE WHEN (:group_id MEMBER OF u.groups OR u.id IN (:data_in)) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN u.id IN (:data_in) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as has_group
',
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'group_id',
          'default' => NULL,
        ),
      ),
    ),
    'columns' => 
    array (
      'has_group' => 
      array (
        'label' => 'oro.user.group.has_group.label',
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
        'has_group' => 
        array (
          'type' => 'boolean',
          'data_name' => 'has_group',
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
        'has_group' => 
        array (
          'data_name' => 'has_group',
        ),
      ),
      'default' => 
      array (
        'has_group' => 'DESC',
        'lastName' => 'ASC',
      ),
    ),
    'options' => 
    array (
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'has_group',
        'selectors' => 
        array (
          'included' => '#groupAppendUsers',
          'excluded' => '#groupRemoveUsers',
        ),
      ),
    ),
  ),
);