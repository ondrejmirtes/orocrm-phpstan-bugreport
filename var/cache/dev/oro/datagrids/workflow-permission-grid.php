<?php return array (
  'workflow-permission-grid' => 
  array (
    'acl_resource' => 'oro_user_role_update',
    'source' => 
    array (
      'type' => 'workflow-permission-provider',
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.workflow.datagrid.workflow_permission.columns.label',
        'data_name' => 'label',
        'frontend_type' => 'string',
        'translatable' => true,
      ),
      'permissions' => 
      array (
        'label' => 'oro.workflow.datagrid.workflow_permission.columns.permissions',
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
        0 => 'oroworkflow/js/datagrid/workflow-datagrid-builder',
      ),
      'toolbarOptions' => 
      array (
        'placement' => 
        array (
          'top' => false,
        ),
      ),
    ),
  ),
);