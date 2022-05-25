<?php return array (
  'user-email-grid' => 
  array (
    'extends' => 'email-grid',
    'extended_entity_name' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
    'properties' => 
    array (
      'id' => NULL,
      'view_thread_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_user_thread_view',
        'params' => 
        array (
          'id' => 'emailId',
        ),
      ),
      'toggle_seen_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_toggle_seen',
        'params' => 
        array (
          'id' => 'id',
        ),
      ),
      'row_class_name' => 
      array (
        'type' => 'callback',
        'className' => 'email-row-is-read',
        'callable' => '@oro_email.helper.datagrid.emails->getReadedRowClosure',
      ),
    ),
    'actions' => 
    array (
      'view_thread' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_thread_link',
        'icon' => 'eye',
        'rowAction' => true,
      ),
      'mark_as_read' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.email.datagrid.emails.action.mark_as_read',
        'link' => 'toggle_seen_link',
        'icon' => 'check-square-o',
        'defaultMessages' => 
        array (
          'success' => 'oro.email.action.success_mark_read',
          'error' => 'oro.email.action.error',
        ),
      ),
      'mark_as_unread' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.email.datagrid.emails.action.mark_as_unread',
        'link' => 'toggle_seen_link',
        'icon' => 'minus',
        'defaultMessages' => 
        array (
          'success' => 'oro.email.action.success_mark_unread',
          'error' => 'oro.email.action.error',
        ),
      ),
    ),
    'action_configuration' => '@oro_email.helper.datagrid.emails->getActionConfigurationClosure',
    'mass_actions' => 
    array (
      'emailmarkread' => 
      array (
        'type' => 'emailmarkread',
        'entity_name' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
        'data_identifier' => 'eu.id',
        'label' => 'oro.email.datagrid.emails.action.mark_as_read',
        'icon' => 'check-square-o',
      ),
      'emailmarkunread' => 
      array (
        'type' => 'emailmarkunread',
        'entity_name' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
        'data_identifier' => 'eu.id',
        'label' => 'oro.email.datagrid.emails.action.mark_as_unread',
        'icon' => 'minus',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
      'entity_pagination_target' => 'Oro\\Bundle\\EmailBundle\\Entity\\Email',
    ),
  ),
);