<?php return array (
  'orcrm-contact-reasons-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactReason',
    'acl_resource' => 'oro_contactus_reason_view',
    'options' => 
    array (
      'entity_pagination' => true,
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'contactReason.id',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactReason',
            'alias' => 'contactReason',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'contactReason.deletedAt IS NULL',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'title' => 
      array (
        'label' => 'oro.contactus.contactreason.label.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'data_name' => 'title',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'type' => 'string',
          'data_name' => 'title',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contactus_reason_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contactus_reason_delete',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'title' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'titles',
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'acl_resource' => 'oro_contactus_reason_update',
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'acl_resource' => 'oro_contactus_reason_delete',
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);