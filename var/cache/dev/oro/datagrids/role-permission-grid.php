<?php return array (
  'role-permission-grid' => 
  array (
    'acl_resource' => 'oro_user_role_update',
    'source' => 
    array (
      'type' => 'role-permission-provider',
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.user.datagrid.role_permission.columns.label',
        'data_name' => 'label',
        'frontend_type' => 'string',
        'translatable' => true,
      ),
      'permissions' => 
      array (
        'label' => 'oro.user.datagrid.role_permission.columns.permissions.label',
        'data_name' => 'permissions',
        'frontend_type' => 'action-permissions',
      ),
      'identity' => 
      array (
        'data_name' => 'identity',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'group' => 
      array (
        'data_name' => 'group',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'fields' => 
      array (
        'data_name' => 'fields',
        'frontend_type' => 'array',
        'renderable' => false,
      ),
    ),
    'filters' => NULL,
    'sorters' => NULL,
    'options' => 
    array (
      'jsmodules' => 
      array (
        0 => 'orouser/js/datagrid/roles-datagrid-builder',
      ),
      'toolbarOptions' => 
      array (
        'placement' => 
        array (
          'top' => false,
          'bottom' => false,
        ),
      ),
    ),
  ),
);