<?php return array (
  'oauth-client-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'client',
          1 => 'client.id',
          2 => 'client.name',
          3 => 'client.identifier',
          4 => 'client.grants',
          5 => 'client.active',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\OAuth2ServerBundle\\Entity\\Client',
            'alias' => 'client',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.oauth2server.client.name.label',
      ),
      'identifier' => 
      array (
        'label' => 'oro.oauth2server.client.identifier.label',
      ),
      'active' => 
      array (
        'label' => 'oro.oauth2server.client.active.label',
        'frontend_type' => 'boolean',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'client.name',
        ),
        'active' => 
        array (
          'data_name' => 'client.active',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'client.name',
        ),
        'active' => 
        array (
          'type' => 'boolean',
          'data_name' => 'client.active',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'activate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_server_client_activate',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'deactivate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_server_client_deactivate',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_oauth2_server_client_delete',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'activate' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.oauth2server.client.action.activate',
        'icon' => 'check',
        'link' => 'activate_link',
        'acl_resource' => 'oro_oauth2_edit',
        'defaultMessages' => 
        array (
          'success' => 'oro.oauth2server.client.activate_success',
        ),
      ),
      'deactivate' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.oauth2server.client.action.deactivate',
        'icon' => 'close',
        'link' => 'deactivate_link',
        'confirmation' => true,
        'acl_resource' => 'oro_oauth2_edit',
        'defaultMessages' => 
        array (
          'confirm_title' => 'oro.oauth2server.client.deactivate_confirm_title',
          'confirm_content' => 'oro.oauth2server.client.deactivate_confirm_message',
          'success' => 'oro.oauth2server.client.deactivate_success',
        ),
      ),
      'delete' => 
      array (
        'type' => 'ajaxdelete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash',
        'acl_resource' => 'oro_oauth2_delete',
        'defaultMessages' => 
        array (
          'confirm_content' => 'oro.oauth2server.client.delete_confirm_message',
          'success' => 'oro.oauth2server.client.delete_success',
        ),
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_oauth2_server.client_action_visibility_provider',
      1 => 'getActionsVisibility',
    ),
    'options' => 
    array (
      'entity_pagination' => false,
      'entityHint' => 'oro.oauth2server.client.datagrid.entity_hint',
    ),
  ),
);