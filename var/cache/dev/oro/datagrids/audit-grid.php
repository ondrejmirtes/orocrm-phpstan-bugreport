<?php return array (
  'audit-grid' => 
  array (
    'acl_resource' => 'oro_dataaudit_view',
    'options' => 
    array (
      'entityHint' => 'oro.dataaudit.abstractaudit.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          'id' => 'a.id',
          'section' => 'a.action',
          'version' => 'a.version',
          'objectClass' => 'a.objectClass',
          'objectName' => 'a.objectName',
          'objectId' => 'a.objectId',
          'loggedAt' => 'a.loggedAt',
          'author' => 'a.ownerDescription as author',
          'organization' => 'IDENTITY(a.organization) as organization',
          'impersonation' => 'IDENTITY(a.impersonation) as impersonation',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DataAuditBundle\\Entity\\AbstractAudit',
            'alias' => 'a',
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
      'action' => 
      array (
        'label' => 'oro.dataaudit.datagrid.action',
        'type' => 'twig',
        'template' => '@OroDataAudit/Datagrid/Property/action.html.twig',
        'frontend_type' => 'html',
      ),
      'version' => 
      array (
        'label' => 'oro.dataaudit.datagrid.version',
      ),
      'objectClass' => 
      array (
        'label' => 'oro.dataaudit.datagrid.entity_type',
        'type' => 'callback',
        'callable' => '@oro_dataaudit.datagrid.entity_type_provider->getEntityType',
      ),
      'objectId' => 
      array (
        'label' => 'oro.dataaudit.datagrid.entity_id',
      ),
      'objectName' => 
      array (
        'label' => 'oro.dataaudit.datagrid.entity_name',
      ),
      'data' => 
      array (
        'label' => 'oro.dataaudit.datagrid.data',
        'type' => 'twig',
        'template' => '@OroDataAudit/Datagrid/Property/data.html.twig',
        'frontend_type' => 'html',
      ),
      'author' => 
      array (
        'label' => 'oro.dataaudit.datagrid.author',
        'type' => 'callback',
        'callable' => '@oro_dataaudit.datagrid.author_provider->getAuthor',
      ),
      'organization' => 
      array (
        'label' => 'oro.dataaudit.datagrid.organization',
      ),
      'loggedAt' => 
      array (
        'label' => 'oro.dataaudit.datagrid.logged_at',
        'frontend_type' => 'datetime',
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
        'action' => 
        array (
          'data_name' => 'a.action',
        ),
        'version' => 
        array (
          'data_name' => 'a.version',
        ),
        'objectClass' => 
        array (
          'data_name' => 'a.objectClass',
        ),
        'objectName' => 
        array (
          'data_name' => 'a.objectName',
        ),
        'objectId' => 
        array (
          'data_name' => 'a.objectId',
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
    'filters' => 
    array (
      'columns' => 
      array (
        'action' => 
        array (
          'type' => 'choice',
          'data_name' => 'a.action',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.dataaudit.action.create' => 'create',
                'oro.dataaudit.action.update' => 'update',
                'oro.dataaudit.action.remove' => 'remove',
              ),
            ),
          ),
        ),
        'version' => 
        array (
          'type' => 'number-range',
          'data_name' => 'a.version',
          'renderable' => false,
        ),
        'objectClass' => 
        array (
          'type' => 'choice',
          'data_name' => 'a.objectClass',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_dataaudit.datagrid.entity_type_provider->getEntityTypes',
            ),
          ),
        ),
        'objectId' => 
        array (
          'type' => 'string',
          'data_name' => 'a.objectId',
        ),
        'objectName' => 
        array (
          'type' => 'string',
          'data_name' => 'a.objectName',
        ),
        'author' => 
        array (
          'type' => 'string',
          'data_name' => 'author',
        ),
        'impersonation' => 
        array (
          'label' => 'oro.dataaudit.datagrid.impersonation',
          'type' => 'choice-tree',
          'data_name' => 'a.impersonation',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\Impersonation',
          'autocomplete_alias' => 'impersonations',
          'renderedPropertyName' => 'ipAddressToken',
        ),
        'loggedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'a.loggedAt',
        ),
      ),
    ),
  ),
);