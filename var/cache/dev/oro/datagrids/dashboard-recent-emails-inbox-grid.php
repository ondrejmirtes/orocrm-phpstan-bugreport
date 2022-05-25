<?php return array (
  'dashboard-recent-emails-inbox-grid' => 
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
            1 => 
            array (
              'join' => 'e.fromEmailAddress',
              'alias' => 'a',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'f.type IN (\'Oro\\Bundle\\EmailBundle\\Model\\FolderType::INBOX\', \'Oro\\Bundle\\EmailBundle\\Model\\FolderType::OTHER\')',
            1 => 'f.id > 0',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'receivedAt' => 
      array (
        'type' => 'twig',
        'label' => 'oro.email.received_at.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/date_long.html.twig',
      ),
      'fromEmailAddress' => 
      array (
        'type' => 'twig',
        'label' => 'oro.email.from_name.label',
        'frontend_type' => 'html',
        'template' => '@OroEmail/Email/Datagrid/Property/from.html.twig',
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
        'fromEmailAddress' => 
        array (
          'data_name' => 'fromEmailAddress',
        ),
        'receivedAt' => 
        array (
          'data_name' => 'receivedAt',
        ),
      ),
      'default' => 
      array (
        'receivedAt' => 'DESC',
      ),
    ),
  ),
);