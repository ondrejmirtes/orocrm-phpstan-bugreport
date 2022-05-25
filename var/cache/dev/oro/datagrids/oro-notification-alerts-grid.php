<?php return array (
  'oro-notification-alerts-grid' => 
  array (
    'acl_resource' => 'oro_notification_alert_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'alert.id',
          1 => 'alert.sourceType',
          2 => 'alert.resourceType',
          3 => 'alert.alertType',
          4 => 'alert.operation',
          5 => 'alert.step as operationStep',
          6 => 'alert.itemId',
          7 => 'alert.externalId',
          8 => 'alert.resolved',
          9 => 'alert.message',
          10 => 'CONCAT_WS(\' \', user.firstName, user.lastName) as userName',
          11 => 'alert.createdAt',
          12 => 'alert.updatedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\NotificationBundle\\Entity\\NotificationAlert',
            'alias' => 'alert',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'alert.user',
              'alias' => 'user',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'inline_editing' => 
    array (
      'enable' => false,
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.notification.notificationalert.id.label',
        'frontend_type' => 'string',
        'order' => 10,
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
        'order' => 20,
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
        'order' => 30,
      ),
      'userName' => 
      array (
        'label' => 'oro.notification.notificationalert.user.label',
        'frontend_type' => 'relation',
        'order' => 40,
      ),
      'message' => 
      array (
        'label' => 'oro.notification.notificationalert.message.label',
        'frontend_type' => 'string',
        'order' => 50,
      ),
      'sourceType' => 
      array (
        'label' => 'oro.notification.notificationalert.source_type.label',
        'frontend_type' => 'string',
        'order' => 60,
      ),
      'resourceType' => 
      array (
        'label' => 'oro.notification.notificationalert.resource_type.label',
        'frontend_type' => 'string',
        'order' => 70,
      ),
      'alertType' => 
      array (
        'label' => 'oro.notification.notificationalert.alert_type.label',
        'frontend_type' => 'string',
        'order' => 80,
      ),
      'operation' => 
      array (
        'label' => 'oro.notification.notificationalert.operation.label',
        'frontend_type' => 'string',
        'order' => 90,
      ),
      'operationStep' => 
      array (
        'label' => 'oro.notification.notificationalert.step.label',
        'frontend_type' => 'string',
        'order' => 100,
      ),
      'itemId' => 
      array (
        'label' => 'oro.notification.notificationalert.item_id.label',
        'frontend_type' => 'string',
        'order' => 110,
      ),
      'externalId' => 
      array (
        'label' => 'oro.notification.notificationalert.external_id.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroNotification/NotificationAlert/Property/externalId.html.twig',
        'order' => 120,
      ),
      'resolved' => 
      array (
        'label' => 'oro.notification.notificationalert.resolved.label',
        'frontend_type' => 'boolean',
        'order' => 130,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'alert.id',
        ),
        'createdAt' => 
        array (
          'data_name' => 'alert.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'alert.updatedAt',
        ),
        'userName' => 
        array (
          'data_name' => 'userName',
        ),
        'message' => 
        array (
          'data_name' => 'alert.message',
        ),
        'sourceType' => 
        array (
          'data_name' => 'alert.sourceType',
        ),
        'resourceType' => 
        array (
          'data_name' => 'alert.resourceType',
        ),
        'alertType' => 
        array (
          'data_name' => 'alert.alertType',
        ),
        'operation' => 
        array (
          'data_name' => 'alert.operation',
        ),
        'operationStep' => 
        array (
          'data_name' => 'operationStep',
        ),
        'itemId' => 
        array (
          'data_name' => 'alert.itemId',
        ),
        'externalId' => 
        array (
          'data_name' => 'alert.externalId',
        ),
        'resolved' => 
        array (
          'data_name' => 'alert.resolved',
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
        'id' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.id',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'alert.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'alert.updatedAt',
        ),
        'userName' => 
        array (
          'type' => 'string',
          'data_name' => 'userName',
        ),
        'message' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.message',
        ),
        'sourceType' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.sourceType',
        ),
        'resourceType' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.resourceType',
        ),
        'alertType' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.alertType',
        ),
        'operation' => 
        array (
          'type' => 'string',
          'data_name' => 'alert.operation',
        ),
        'operationStep' => 
        array (
          'type' => 'string',
          'data_name' => 'operationStep',
        ),
        'itemId' => 
        array (
          'data_name' => 'alert.itemId',
          'type' => 'number',
        ),
        'externalId' => 
        array (
          'data_name' => 'alert.externalId',
          'type' => 'string',
        ),
        'resolved' => 
        array (
          'data_name' => 'alert.resolved',
          'type' => 'boolean',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.notification.notificationalert.entity_plural_label',
      'export' => true,
    ),
    'views_list' => '@oro_notification.notification_alert.datagrid_view_list',
  ),
);