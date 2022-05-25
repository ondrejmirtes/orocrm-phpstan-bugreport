<?php return array (
  'dashboard-recent-emails-new-grid' => 
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
              'join' => 'e.fromEmailAddress',
              'alias' => 'a',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'eu.seen = false',
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
        'cellClassName' => 'direction-ltr',
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
    'options' => 
    array (
      'jsmodules' => 
      array (
        0 => 'oroemail/js/datagrid/listen-to-read-email-extension',
      ),
    ),
  ),
);