<?php return array (
  'audit-history-grid' => 
  array (
    'acl_resource' => 'oro_dataaudit_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          'id' => 'a.id',
          'author' => 'a.ownerDescription as author',
          'objectClass' => 'a.objectClass',
          'loggedAt' => 'a.loggedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DataAuditBundle\\Entity\\AbstractAudit',
            'alias' => 'a',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'a.objectClass = :objectClass AND a.objectId = :objectId',
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_FORCE_PARTIAL_LOAD',
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'renderable' => false,
        'manageable' => false,
      ),
      'author' => 
      array (
        'label' => 'oro.dataaudit.datagrid.author',
      ),
      'loggedAt' => 
      array (
        'label' => 'oro.dataaudit.datagrid.logged_at',
        'type' => 'field',
        'frontend_type' => 'datetime',
      ),
      'old' => 
      array (
        'label' => 'oro.dataaudit.datagrid.old_values',
        'type' => 'twig',
        'template' => '@OroDataAudit/Datagrid/Property/old.html.twig',
        'frontend_type' => 'html',
        'data_name' => 'data',
      ),
      'new' => 
      array (
        'label' => 'oro.dataaudit.datagrid.new_values',
        'type' => 'twig',
        'template' => '@OroDataAudit/Datagrid/Property/new.html.twig',
        'frontend_type' => 'html',
        'data_name' => 'data',
      ),
    ),
    'properties' => NULL,
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'a.id',
        ),
        'author' => 
        array (
          'data_name' => 'a.ownerDescription',
        ),
        'loggedAt' => 
        array (
          'data_name' => 'a.loggedAt',
        ),
      ),
      'default' => 
      array (
        'id' => 'DESC',
      ),
    ),
    'filters' => NULL,
  ),
);