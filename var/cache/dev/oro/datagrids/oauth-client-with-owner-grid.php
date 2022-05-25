<?php return array (
  'oauth-client-with-owner-grid' => 
  array (
    'extends' => 'oauth-client-grid',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'client.ownerEntityId = :ownerEntityId',
            1 => 'client.ownerEntityClass = :ownerEntityClass',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'ownerEntityId',
        1 => 'ownerEntityClass',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_server_client_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'dialog',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
        'acl_resource' => 'oro_oauth2_edit',
        'widgetOptions' => 
        array (
          'reload-grid-name' => 'oauth-client-with-owner-grid',
          'options' => 
          array (
            'dialogOptions' => 
            array (
              'title' => '@translator->trans(oro.oauth2server.client.dialog.edit_title)',
              'modal' => true,
              'width' => 500,
            ),
          ),
        ),
      ),
    ),
  ),
);