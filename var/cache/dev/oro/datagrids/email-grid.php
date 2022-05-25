<?php return array (
  'email-grid' => 
  array (
    'extends' => 'base-email-grid',
    'filters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'type' => 'email-string',
          'data_name' => 'e.subject',
        ),
        'from' => 
        array (
          'type' => 'email-string',
          'data_name' => 'e.fromName',
          'label' => 'oro.email.from_email_address.label',
        ),
        'to' => 
        array (
          'type' => 'string',
          'data_name' => 'r_to.name',
          'label' => 'oro.email.to.label',
        ),
        'cc' => 
        array (
          'type' => 'string',
          'data_name' => 'r_cc.name',
          'label' => 'oro.email.cc.label',
          'renderable' => false,
        ),
        'bcc' => 
        array (
          'type' => 'string',
          'data_name' => 'r_bcc.name',
          'label' => 'oro.email.bcc.label',
          'renderable' => false,
        ),
        'date' => 
        array (
          'type' => 'datetime',
          'data_name' => 'e.sentAt',
          'label' => 'oro.email.date_time.label',
        ),
        'folder' => 
        array (
          'label' => 'oro.email.message_type.label',
          'type' => 'multiselect-messagetype',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => 
              array (
                'oro.email.folder_type.inbox' => 'inbox',
                'oro.email.folder_type.sent' => 'sent',
              ),
            ),
          ),
          'data_name' => 'f.type',
        ),
        'folders' => 
        array (
          'type' => 'multiselect-originfolder',
          'data_name' => 'f.id',
          'label' => 'oro.email.folders.label',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_email.datagrid.origin_folder.provider->getListTypeChoices()',
            ),
          ),
        ),
        'is_new' => 
        array (
          'label' => 'oro.email.status.label',
          'type' => 'boolean',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.email.status.unread.label' => 2,
                'oro.email.status.read.label' => 1,
              ),
            ),
          ),
          'data_name' => 'eu.seen',
        ),
        'mailbox' => 
        array (
          'label' => 'oro.email.mailbox.entity_label',
          'data_name' => 'f.origin',
          'type' => 'choice',
          'options' => 
          array (
            'field_options' => 
            array (
              'required' => false,
              'choices' => '@oro_email.mailbox_choice_list->getChoiceList',
            ),
          ),
        ),
      ),
    ),
    'views_list' => '@oro_email.emailfolder.datagrid_view_list',
  ),
);