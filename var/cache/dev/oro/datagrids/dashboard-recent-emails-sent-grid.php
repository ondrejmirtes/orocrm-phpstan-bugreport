<?php return array (
  'dashboard-recent-emails-sent-grid' => 
  array (
    'extends' => 'dashboard-recent-emails-grid',
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'eu.folders',
              'alias' => 'f',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'f.type = \'Oro\\Bundle\\EmailBundle\\Model\\FolderType::SENT\'',
            1 => 'f.id > 0',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'sentAt' => 
      array (
        'data_name' => 'sentAt',
        'label' => 'oro.email.sent_at.label',
        'frontend_type' => 'datetime',
      ),
      'recipients' => 
      array (
        'data_name' => 'recipients',
        'type' => 'twig',
        'label' => 'oro.email.recipients.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/recipients.html.twig',
      ),
      'subject' => 
      array (
        'data_name' => 'subject',
        'type' => 'twig',
        'label' => 'oro.email.subject.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/subject.html.twig',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'sentAt' => 
        array (
          'data_name' => 'e.sentAt',
        ),
      ),
      'default' => 
      array (
        'sentAt' => 'DESC',
      ),
    ),
  ),
);