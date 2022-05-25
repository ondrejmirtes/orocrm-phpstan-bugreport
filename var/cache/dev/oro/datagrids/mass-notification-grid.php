<?php return array (
  'mass-notification-grid' => 
  array (
    'options' => 
    array (
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_notification_massnotification_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.id',
          1 => 'e.subject',
          2 => 'e.email',
          3 => 'e.sender',
          4 => 'e.status',
          5 => 'e.processedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\NotificationBundle\\Entity\\MassNotification',
            'alias' => 'e',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'sender' => 
      array (
        'label' => 'oro.notification.massnotification.sender.label',
        'frontend_type' => 'string',
      ),
      'email' => 
      array (
        'label' => 'oro.notification.massnotification.email.label',
        'frontend_type' => 'string',
      ),
      'processedAt' => 
      array (
        'label' => 'oro.notification.massnotification.processed_at.label',
        'frontend_type' => 'datetime',
      ),
      'subject' => 
      array (
        'label' => 'oro.notification.massnotification.subject.label',
        'frontend_type' => 'string',
      ),
      'status' => 
      array (
        'label' => 'oro.notification.massnotification.status.label',
        'frontend_type' => 'select',
        'choices' => 
        array (
          'oro.notification.massnotification.status.failed' => 0,
          'oro.notification.massnotification.status.success' => 1,
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_notification_massnotification_view',
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
        'acl_resource' => 'oro_notification_massnotification_view',
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'e.subject',
        ),
        'processedAt' => 
        array (
          'data_name' => 'e.processedAt',
        ),
      ),
      'default' => 
      array (
        'processedAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'sender' => 
        array (
          'type' => 'string',
          'data_name' => 'e.sender',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'e.email',
        ),
        'processedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'e.processedAt',
        ),
        'subject' => 
        array (
          'type' => 'string',
          'data_name' => 'e.subject',
        ),
        'status' => 
        array (
          'type' => 'choice',
          'data_name' => 'e.status',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.notification.massnotification.status.failed' => 0,
                'oro.notification.massnotification.status.success' => 1,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);