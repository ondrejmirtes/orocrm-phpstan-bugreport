<?php return array (
  'calls-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
    'acl_resource' => 'oro_call_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'call.id',
          1 => 'call.subject',
          2 => 'CONCAT(call.phoneNumber, \'\') as phone',
          3 => 'call.callDateTime as dateTime',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
            'alias' => 'call',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'subject' => 
      array (
        'label' => 'oro.call.subject.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.call.phone_number.label',
        'frontend_type' => 'phone',
      ),
      'dateTime' => 
      array (
        'label' => 'oro.call.call_date_time.label',
        'frontend_type' => 'datetime',
      ),
      'contexts' => 
      array (
        'label' => 'oro.call.contexts.label',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'type' => 'string',
          'data_name' => 'call.subject',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone',
        ),
        'dateTime' => 
        array (
          'type' => 'datetime',
          'data_name' => 'call.callDateTime',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'call.subject',
        ),
        'phone' => 
        array (
          'data_name' => 'phone',
        ),
        'dateTime' => 
        array (
          'data_name' => 'call.callDateTime',
        ),
      ),
      'default' => 
      array (
        'dateTime' => 'DESC',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_call_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_call_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_call',
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
        'acl_resource' => 'oro_call_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_call_create',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_call_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.call.entity_plural_label',
      'export' => true,
      'entity_pagination' => true,
      'contexts' => 
      array (
        'enabled' => true,
      ),
    ),
  ),
);