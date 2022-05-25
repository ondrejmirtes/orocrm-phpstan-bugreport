<?php return array (
  'orcrm-contact-requests-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest',
    'acl_resource' => 'oro_contactus_request_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'cr.id',
          1 => 'cr.firstName',
          2 => 'cr.lastName',
          3 => 'cr.emailAddress',
          4 => 'cr.phone',
          5 => 'cr.createdAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ContactUsBundle\\Entity\\ContactRequest',
            'alias' => 'cr',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'cr.contactReason',
              'alias' => 'rsn',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'firstName' => 
      array (
        'label' => 'oro.contactus.contactrequest.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.contactus.contactrequest.last_name.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.contactus.contactrequest.phone.label',
        'frontend_type' => 'phone',
      ),
      'emailAddress' => 
      array (
        'label' => 'oro.contactus.contactrequest.email_address.label',
        'cellClassName' => 'direction-ltr',
      ),
      'createdAt' => 
      array (
        'frontend_type' => 'datetime',
        'label' => 'oro.ui.created_at',
      ),
      'cntReason' => 
      array (
        'label' => 'oro.contactus.contactreason.entity_label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'data_name' => 'cr.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'cr.lastName',
        ),
        'phone' => 
        array (
          'data_name' => 'cr.phone',
        ),
        'emailAddress' => 
        array (
          'data_name' => 'cr.emailAddress',
        ),
        'createdAt' => 
        array (
          'data_name' => 'cr.createdAt',
        ),
      ),
      'default' => 
      array (
        'createdAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'cr.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'cr.lastName',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'cr.phone',
        ),
        'emailAddress' => 
        array (
          'type' => 'string',
          'data_name' => 'cr.emailAddress',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'cr.createdAt',
        ),
        'cntReason' => 
        array (
          'type' => 'string',
          'data_name' => 'cntReason',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contactus_request_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contactus_request_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contactus_request_delete',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'cntReason' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'rsn.titles',
        'allow_empty' => true,
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'acl_resource' => 'oro_contactus_request_view',
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'acl_resource' => 'oro_contactus_request_edit',
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'acl_resource' => 'oro_contactus_request_delete',
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contactus.contactrequest.entity_plural_label',
      'entity_pagination' => true,
    ),
  ),
);