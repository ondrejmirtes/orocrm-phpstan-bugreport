<?php return array (
  'users-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
    'views_list' => '@oro_user.user.datagrid_view_list',
    'options' => 
    array (
      'entityHint' => 'oro.user.entity_plural_label',
      'entity_pagination' => true,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
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
          5 => 'u.createdAt',
          6 => 'u.updatedAt',
          7 => 'u.enabled',
          8 => 'au.id as auth_status',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
            'alias' => 'u',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'u.auth_status',
              'alias' => 'au',
            ),
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
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
        'editable' => false,
        'inline_editing' => 
        array (
          'enable' => false,
        ),
        'choices' => 
        array (
          'oro.user.datagrid.user.columns.disabled' => 0,
          'oro.user.datagrid.user.columns.enabled' => 1,
        ),
      ),
      'auth_status' => 
      array (
        'label' => 'oro.user.auth_status.label',
        'editable' => false,
        'inline_editing' => 
        array (
          'enable' => false,
        ),
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_user',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'config_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_config',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
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
        'createdAt' => 
        array (
          'data_name' => 'u.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'u.updatedAt',
        ),
        'enabled' => 
        array (
          'data_name' => 'u.enabled',
        ),
        'auth_status' => 
        array (
          'data_name' => 'au.priority',
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
        'auth_status' => 
        array (
          'type' => 'enum',
          'data_name' => 'au.id',
          'enum_code' => 'auth_status',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'u.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'u.updatedAt',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_user_user_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_user_user_update',
      ),
      'config' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.user.user_configuration.grid.action.config',
        'link' => 'config_link',
        'icon' => 'cog',
        'acl_resource' => 'oro_user_user_config',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash-o',
        'acl_resource' => 'oro_user_user_delete',
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_user.datagrid.action_checker',
      1 => 'checkActions',
    ),
  ),
);