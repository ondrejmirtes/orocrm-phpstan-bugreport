<?php return array (
  'base-mailboxes-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'm',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EmailBundle\\Entity\\Mailbox',
            'alias' => 'm',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'm.processSettings',
              'alias' => 'process',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'email' => 
      array (
        'label' => 'oro.email.mailbox.email.label',
      ),
      'label' => 
      array (
        'label' => 'oro.email.mailbox.label.label',
      ),
      'imap' => 
      array (
        'label' => 'oro.imap.configuration.use_imap.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'data_name' => 'origin',
        'template' => '@OroEmail/Mailbox/Datagrid/Property/origin.html.twig',
      ),
      'smtp' => 
      array (
        'label' => 'oro.imap.configuration.use_smtp.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'data_name' => 'origin',
        'template' => '@OroEmail/Mailbox/Datagrid/Property/originSmtp.html.twig',
      ),
      'processing' => 
      array (
        'data_name' => 'processSettings',
        'type' => 'twig',
        'label' => 'oro.email.mailbox.process.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Mailbox/Datagrid/Property/processSettings.html.twig',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_mailbox_update',
        'params' => 
        array (
          'id' => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_mailbox_delete',
        'params' => 
        array (
          'id' => 'id',
        ),
      ),
    ),
    'options' => 
    array (
      'toolbarOptions' => 
      array (
        'hide' => true,
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
  ),
);