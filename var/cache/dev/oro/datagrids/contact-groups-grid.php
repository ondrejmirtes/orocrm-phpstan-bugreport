<?php return array (
  'contact-groups-grid' => 
  array (
    'acl_resource' => 'oro_contact_group_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'g.id',
          1 => 'g.label',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ContactBundle\\Entity\\Group',
            'alias' => 'g',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.contact.group.label.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contact_group_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_contactgroup',
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
        'label' => 
        array (
          'data_name' => 'g.label',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'type' => 'string',
          'data_name' => 'g.label',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_contact_group_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_contact_group_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.group.entity_plural_label',
      'entity_pagination' => true,
    ),
  ),
);