<?php return array (
  'cases-for-context-grid' => 
  array (
    'options' => 
    array (
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
      'routerEnabled' => false,
    ),
    'source' => 
    array (
      'type' => 'orm',
      'acl_resource' => 'oro_case_view',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'caseEntity.id',
          1 => 'caseEntity.id as caseNumber',
          2 => 'caseEntity.subject',
          3 => 'caseEntity.reportedAt',
          4 => 'CONCAT_WS(\' \', relatedContact.firstName, relatedContact.lastName) as relatedContactName',
          5 => 'CONCAT_WS(\' \', assignedTo.firstName, assignedTo.lastName) as assignedToName',
          6 => 'relatedAccount.name as relatedAccountName',
          7 => 'assignedTo.id as assignedToId',
          8 => 'status.label as statusLabel',
          9 => 'priority.label as priorityLabel',
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
              'alias' => 'priority',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.case.datagrid.id.label',
      ),
      'subject' => 
      array (
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
      'statusLabel' => 
      array (
        'label' => 'oro.case.datagrid.status.label',
      ),
      'priorityLabel' => 
      array (
        'label' => 'oro.case.datagrid.priority.label',
      ),
      'reportedAt' => 
      array (
        'renderable' => false,
        'frontend_type' => 'datetime',
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
        'assignedToName' => 
        array (
          'data_name' => 'assignedToName',
        ),
        'statusLabel' => 
        array (
          'data_name' => 'status.order',
        ),
        'priorityLabel' => 
        array (
          'data_name' => 'priority.order',
        ),
        'reportedAt' => 
        array (
          'data_name' => 'caseEntity.reportedAt',
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
          'data_name' => 'priority.name',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\CaseBundle\\Entity\\CasePriority',
              'choice_label' => 'label',
            ),
          ),
        ),
      ),
    ),
  ),
);