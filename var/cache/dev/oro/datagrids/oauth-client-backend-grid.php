<?php return array (
  'oauth-client-backend-grid' => 
  array (
    'extends' => 'oauth-client-grid',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'client.ownerEntityId',
          1 => 'client.ownerEntityClass',
          2 => 'client.frontend',
          3 => 'client.lastUsedAt',
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'client.frontend = :frontend',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'frontend',
      ),
    ),
    'columns' => 
    array (
      'grants' => 
      array (
        'label' => 'oro.oauth2server.client.grants.label',
        'inline_editing' => 
        array (
          'enable' => false,
        ),
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroOAuth2Server/Client/Datagrid/grants.html.twig',
      ),
      'lastUsedAt' => 
      array (
        'label' => 'oro.oauth2server.client.last_used_at.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'lastUsedAt' => 
        array (
          'data_name' => 'client.lastUsedAt',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'lastUsedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'client.lastUsedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_update',
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
        'icon' => 'edit',
        'link' => 'update_link',
        'acl_resource' => 'oro_oauth2_edit',
      ),
    ),
  ),
);