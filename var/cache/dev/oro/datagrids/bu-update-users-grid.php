<?php return array (
  'bu-update-users-grid' => 
  array (
    'extends' => 'user-relation-grid',
    'acl_resource' => 'oro_business_unit_update',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '(CASE WHEN (:business_unit_id IS NOT NULL) THEN
  CASE WHEN (:business_unit_id MEMBER OF u.businessUnits OR u.id IN (:data_in)) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN u.id IN (:data_in) AND u.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as hasCurrentBusinessUnit
',
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'business_unit_id',
          'default' => NULL,
        ),
      ),
    ),
    'columns' => 
    array (
      'hasCurrentBusinessUnit' => 
      array (
        'label' => 'oro.business_unit.datagrid.has_business_unit',
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
        'hasCurrentBusinessUnit' => 
        array (
          'type' => 'boolean',
          'data_name' => 'hasCurrentBusinessUnit',
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
      'columns' => 
      array (
        'hasCurrentBusinessUnit' => 
        array (
          'data_name' => 'hasCurrentBusinessUnit',
        ),
      ),
      'default' => 
      array (
        'hasCurrentBusinessUnit' => 'DESC',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.user.entity_plural_label',
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'hasCurrentBusinessUnit',
        'selectors' => 
        array (
          'included' => '#businessUnitAppendUsers',
          'excluded' => '#businessUnitRemoveUsers',
        ),
      ),
    ),
  ),
);