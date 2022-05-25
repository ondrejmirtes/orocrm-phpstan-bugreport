<?php return array (
  'widget-base-tasks-grid' => 
  array (
    'acl_resource' => 'oro_task_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'task.id',
          1 => 'task.subject',
          2 => 'task.dueDate',
          3 => 'taskPriority.label as priorityLabel',
          4 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
          5 => 'owner.id as ownerId',
          6 => 'ts.id as taskStatus',
          7 => 'ts.name as statusLabel',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TaskBundle\\Entity\\Task',
            'alias' => 'task',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'task.taskPriority',
              'alias' => 'taskPriority',
            ),
            1 => 
            array (
              'join' => 'task.owner',
              'alias' => 'owner',
            ),
            2 => 
            array (
              'join' => 'task.status',
              'alias' => 'ts',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'subject' => 
      array (
        'label' => 'oro.task.subject.label',
        'type' => 'twig',
        'template' => '@OroTask/Task/Datagrid/Property/subject.html.twig',
        'frontend_type' => 'html',
      ),
      'dueDate' => 
      array (
        'label' => 'oro.task.due_date.label',
        'frontend_type' => 'datetime',
      ),
      'statusLabel' => 
      array (
        'label' => 'oro.task.status.label',
      ),
      'priorityLabel' => 
      array (
        'label' => 'oro.task.task_priority.label',
      ),
      'ownerName' => 
      array (
        'type' => 'twig',
        'label' => 'oro.task.owner.label',
        'frontend_type' => 'html',
        'template' => '@OroTask/Task/Datagrid/Property/owner.html.twig',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'task.subject',
        ),
        'dueDate' => 
        array (
          'data_name' => 'task.dueDate',
        ),
        'statusLabel' => 
        array (
          'data_name' => 'ts.priority',
        ),
        'priorityLabel' => 
        array (
          'data_name' => 'taskPriority.order',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
      ),
      'default' => 
      array (
        'dueDate' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'type' => 'string',
          'data_name' => 'task.subject',
        ),
        'dueDate' => 
        array (
          'type' => 'datetime',
          'data_name' => 'task.dueDate',
        ),
        'statusLabel' => 
        array (
          'type' => 'enum',
          'data_name' => 'taskStatus',
          'enum_code' => 'task_status',
        ),
        'priorityLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'priorityLabel',
        ),
        'ownerName' => 
        array (
          'type' => 'string',
          'data_name' => 'ownerName',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
  ),
);