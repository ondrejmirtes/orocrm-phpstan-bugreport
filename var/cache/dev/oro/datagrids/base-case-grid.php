<?php return array (
  'base-case-grid' => 
  array (
    'acl_resource' => 'oro_case_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'caseEntity.id',
          1 => 'caseEntity.id as caseNumber',
          2 => 'caseEntity.subject',
          3 => 'caseEntity.reportedAt',
          4 => 'caseEntity.closedAt',
          5 => 'CONCAT_WS(\' \', relatedContact.firstName, relatedContact.lastName) as relatedContactName',
          6 => 'CONCAT_WS(\' \', assignedTo.firstName, assignedTo.lastName) as assignedToName',
          7 => 'relatedAccount.name as relatedAccountName',
          8 => 'assignedTo.id as assignedToId',
          9 => 'status.label as statusLabel',
          10 => 'pr.label as priorityLabel',
          11 => 'pr.name as priority',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CaseBundle\\Entity\\CaseEntity',
            'alias' => 'caseEntity',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'caseEntity.relatedContact',
              'alias' => 'relatedContact',
            ),
            1 => 
            array (
              'join' => 'caseEntity.relatedAccount',
              'alias' => 'relatedAccount',
            ),
            2 => 
            array (
              'join' => 'caseEntity.assignedTo',
              'alias' => 'assignedTo',
            ),
            3 => 
            array (
              'join' => 'caseEntity.owner',
              'alias' => 'owner',
            ),
            4 => 
            array (
              'join' => 'caseEntity.source',
              'alias' => 'source',
            ),
            5 => 
            array (
              'join' => 'caseEntity.status',
              'alias' => 'status',
            ),
            6 => 
            array (
              'join' => 'caseEntity.priority',
              'alias' => 'pr',
            ),
          ),
        ),
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
      'entity_name' => 'Oro\\Bundle\\CaseBundle\\Entity\\CaseEntity',
    ),
    'columns' => 
    array (
      'caseNumber' => 
      array (
        'label' => 'oro.case.datagrid.case_number.label',
      ),
      'subject' => 
      array (
        'inline_editing' => 
        array (
          'enable' => false,
        ),
        'type' => 'twig',
        'label' => 'oro.case.datagrid.subject.label',
        'frontend_type' => 'html',
        'template' => '@OroCase/Case/Datagrid/Property/subject.html.twig',
      ),
      'assignedToName' => 
      array (
        'type' => 'twig',
        'label' => 'oro.case.datagrid.assigned_to.label',
        'frontend_type' => 'html',
        'template' => '@OroCase/Case/Datagrid/Property/assignedTo.html.twig',
      ),
      'reportedAt' => 
      array (
        'inline_editing' => 
        array (
          'enable' => false,
        ),
        'label' => 'oro.case.datagrid.reported_on.label',
        'frontend_type' => 'datetime',
      ),
      'closedAt' => 
      array (
        'inline_editing' => 
        array (
          'enable' => false,
        ),
        'label' => 'oro.case.datagrid.closed_on.label',
        'frontend_type' => 'datetime',
      ),
      'statusLabel' => 
      array (
        'label' => 'oro.case.datagrid.status.label',
      ),
      'priority' => 
      array (
        'label' => 'oro.case.datagrid.priority.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'caseEntity.subject',
        ),
        'caseNumber' => 
        array (
          'data_name' => 'caseEntity.id',
        ),
        'assignedToName' => 
        array (
          'data_name' => 'assignedToName',
        ),
        'reportedAt' => 
        array (
          'data_name' => 'caseEntity.reportedAt',
        ),
        'closedAt' => 
        array (
          'data_name' => 'caseEntity.closedAt',
        ),
        'statusLabel' => 
        array (
          'data_name' => 'status.order',
        ),
        'priority' => 
        array (
          'data_name' => 'pr.order',
        ),
      ),
      'default' => 
      array (
        'reportedAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'caseNumber' => 
        array (
          'type' => 'number-range',
          'data_name' => 'caseEntity.id',
        ),
        'subject' => 
        array (
          'type' => 'string',
          'data_name' => 'caseEntity.subject',
        ),
        'assignedToName' => 
        array (
          'type' => 'string',
          'data_name' => 'assignedToName',
        ),
        'reportedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'caseEntity.reportedAt',
        ),
        'closedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'caseEntity.closedAt',
        ),
        'statusLabel' => 
        array (
          'label' => 'oro.case.datagrid.status.label',
          'type' => 'entity',
          'data_name' => 'status.name',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\CaseBundle\\Entity\\CaseStatus',
              'choice_label' => 'label',
            ),
          ),
        ),
        'priorityLabel' => 
        array (
          'label' => 'oro.case.datagrid.priority.label',
          'type' => 'entity',
          'data_name' => 'pr.name',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\CaseBundle\\Entity\\CasePriority',
              'choice_label' => 'label',
            ),
          ),
        ),
        'source' => 
        array (
          'label' => 'oro.case.datagrid.source.label',
          'type' => 'entity',
          'renderable' => false,
          'data_name' => 'source.name',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\CaseBundle\\Entity\\CaseSource',
              'choice_label' => 'label',
            ),
          ),
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'caseEntity.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
          'renderable' => false,
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'caseEntity.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
          'renderable' => false,
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_case_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_case_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_case_api_delete_case',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_case_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_case_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_case_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);