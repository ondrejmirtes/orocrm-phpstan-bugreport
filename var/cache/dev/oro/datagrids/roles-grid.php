<?php return array (
  'roles-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
    'options' => 
    array (
      'entityHint' => 'oro.user.role.entity_plural_label',
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_user_role_view',
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'r',
          1 => 'r.id',
          2 => 'r.role',
          3 => 'r.label',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\UserBundle\\Entity\\Role',
            'alias' => 'r',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'r.role <> \'Oro\\Bundle\\UserBundle\\Entity\\User::ROLE_ANONYMOUS\'',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.user.role.label.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_role_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_role_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_role',
        'params' => 
        array (
          0 => 'id',
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
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_user_role_update',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash-o',
        'acl_resource' => 'oro_user_role_delete',
      ),
    ),
    'action_configuration' => '@oro_user.role.datagrid_helper->getActionConfigurationClosure',
    'sorters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'data_name' => 'r.label',
        ),
      ),
      'default' => 
      array (
        'label' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'type' => 'string',
          'data_name' => 'r.label',
        ),
      ),
    ),
  ),
);