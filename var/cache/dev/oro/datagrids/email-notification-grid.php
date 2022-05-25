<?php return array (
  'email-notification-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.notification.emailnotification.datagrid.entity_hint',
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_notification_emailnotification_view',
    'extended_entity_name' => 'Oro\\Bundle\\NotificationBundle\\Entity\\EmailNotification',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'partial e.{id, entityName, eventName}',
          1 => 'recipientList.email as emailRecipient',
          2 => 'template.name as templateName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\NotificationBundle\\Entity\\EmailNotification',
            'alias' => 'e',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'e.template',
              'alias' => 'template',
            ),
            1 => 
            array (
              'join' => 'e.recipientList',
              'alias' => 'recipientList',
            ),
            2 => 
            array (
              'join' => 'recipientList.users',
              'alias' => 'recipientUsersList',
            ),
            3 => 
            array (
              'join' => 'recipientList.groups',
              'alias' => 'recipientGroupsList',
            ),
          ),
        ),
        'groupBy' => 'e.id, emailRecipient, templateName',
      ),
    ),
    'columns' => 
    array (
      'entityName' => 
      array (
        'label' => 'oro.notification.emailnotification.entity_name.label',
        'data_name' => 'entityName',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_entity.entity_provider',
        ),
        'order' => 10,
      ),
      'eventName' => 
      array (
        'label' => 'oro.notification.emailnotification.event_name.label',
        'type' => 'translatable',
        'choices' => '@oro_notification.grid_helper->getEventNameChoices',
        'order' => 20,
      ),
      'templateName' => 
      array (
        'label' => 'oro.notification.emailnotification.template.label',
        'order' => 50,
      ),
      'recipientUsersList' => 
      array (
        'label' => 'oro.notification.datagrid.recipient.user',
        'type' => 'twig',
        'template' => '@OroNotification/EmailNotification/Datagrid/Property/recipientUsersList.html.twig',
        'frontend_type' => 'html',
        'order' => 60,
      ),
      'recipientGroupsList' => 
      array (
        'label' => 'oro.notification.datagrid.recipient.group',
        'type' => 'twig',
        'template' => '@OroNotification/EmailNotification/Datagrid/Property/recipientGroupsList.html.twig',
        'choices' => '@oro_notification.grid_helper->getRecipientGroupsChoices',
        'frontend_type' => 'html',
        'order' => 70,
      ),
      'emailRecipient' => 
      array (
        'label' => 'oro.notification.datagrid.recipient.custom_email',
        'frontend_type' => 'string',
        'order' => 80,
        'cellClassName' => 'direction-ltr',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_notification_emailnotification_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_emailnotication',
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
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'acl_resource' => 'oro_notification_emailnotification_update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'acl_resource' => 'oro_notification_emailnotification_delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'sorters' => NULL,
    'filters' => 
    array (
      'columns' => 
      array (
        'entityName' => 
        array (
          'type' => 'choice',
          'data_name' => 'e.entityName',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_entity.datagrid_helper->getEntityNames',
              'translatable_options' => false,
            ),
          ),
        ),
        'eventName' => 
        array (
          'filter_by_having' => true,
          'type' => 'choice',
          'data_name' => 'eventName',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_notification.grid_helper->getEventNameChoices',
            ),
          ),
        ),
        'templateName' => 
        array (
          'type' => 'string',
          'data_name' => 'template.name',
        ),
        'recipientUsersList' => 
        array (
          'type' => 'choice',
          'data_name' => 'recipientUsersList.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_notification.grid_helper->getRecipientUsersChoices',
            ),
          ),
        ),
        'recipientGroupsList' => 
        array (
          'type' => 'choice',
          'data_name' => 'recipientGroupsList.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_notification.grid_helper->getRecipientGroupsChoices',
            ),
          ),
        ),
        'emailRecipient' => 
        array (
          'type' => 'string',
          'data_name' => 'emailRecipient',
        ),
      ),
    ),
  ),
);