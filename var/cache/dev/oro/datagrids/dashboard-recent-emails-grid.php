<?php return array (
  'dashboard-recent-emails-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'eu.id AS id',
          1 => 'eu.seen AS seen',
          2 => 'eu.receivedAt AS receivedAt',
          3 => 'e.id AS emailId',
          4 => 'e.subject AS subject',
          5 => 'e.sentAt AS sentAt',
          6 => 'eb.textBody AS body_content',
          7 => 'CASE WHEN eu.seen = true THEN 0 ELSE 1 END AS is_new',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmailBundle\\Entity\\EmailUser',
            'alias' => 'eu',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'eu.email',
              'alias' => 'e',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'e.emailBody',
              'alias' => 'eb',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'row_class_name' => 
      array (
        'type' => 'callback',
        'className' => 'email-row-is-read',
        'callable' => '@oro_email.helper.datagrid.emails->getReadedRowClosure',
      ),
      'view_thread_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_thread_widget',
        'params' => 
        array (
          'id' => 'emailId',
        ),
      ),
      'reply_email_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_email_reply',
        'params' => 
        array (
          'id' => 'emailId',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.email.entity_plural_label',
      'toolbarOptions' => 
      array (
        'hide' => true,
        'pagination' => 
        array (
          'onePage' => true,
        ),
        'pageSize' => 
        array (
          'items' => 
          array (
            0 => 10,
          ),
          'default_per_page' => 10,
        ),
      ),
    ),
    'actions' => 
    array (
      'reply' => 
      array (
        'type' => 'dialog',
        'label' => 'oro.email.datagrid.emails.action.reply',
        'link' => 'reply_email_link',
        'icon' => 'reply',
        'widgetOptions' => 
        array (
          'options' => 
          array (
            'dialogOptions' => 
            array (
              'title' => '@translator->trans(oro.dashboard.recent_emails.reply)',
              'allowMaximize' => false,
              'allowMinimize' => false,
              'modal' => true,
              'dblclick' => 'maximize',
              'maximizedHeightDecreaseBy' => 'minimize-bar',
              'width' => 700,
            ),
          ),
        ),
      ),
      'view_thread' => 
      array (
        'type' => 'dialog',
        'label' => 'oro.email.datagrid.emails.action.view',
        'link' => 'view_thread_link',
        'icon' => 'eye',
        'rowAction' => true,
        'widgetOptions' => 
        array (
          'options' => 
          array (
            'dialogOptions' => 
            array (
              'title' => '@translator->trans(oro.dashboard.recent_emails.view_email)',
              'allowMaximize' => false,
              'allowMinimize' => false,
              'modal' => true,
              'dblclick' => 'maximize',
              'maximizedHeightDecreaseBy' => 'minimize-bar',
              'width' => 700,
            ),
          ),
        ),
      ),
    ),
  ),
);