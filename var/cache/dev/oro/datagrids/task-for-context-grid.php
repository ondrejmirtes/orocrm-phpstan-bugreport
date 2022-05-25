<?php return array (
  'task-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\TaskBundle\\Entity\\Task',
    'acl_resource' => 'oro_task_view',
    'options' => 
    array (
      'entityHint' => 'oro.task.entity_plural_label',
      'entity_pagination' => true,
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
      'query' => 
      array (
        'select' => 
        array (
          0 => 'task.id',
          1 => 'task.subject',
          2 => 'task.description',
          3 => 'task.dueDate',
          4 => 'tp.name as taskPriority',
          5 => 'tp.label as priorityLabel',
          6 => 'CONCAT_WS(\' \', own.firstName, own.lastName) as ownerName',
          7 => 'own.id as owner',
          8 => 'ts.id as taskStatus',
          9 => 'ts.name as statusLabel',
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
              'alias' => 'tp',
            ),
            1 => 
            array (
              'join' => 'task.owner',
              'alias' => 'own',
            ),
            2 => 
            array (
              'join' => 'task.status',
              'alias' => 'ts',
            ),
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.task.id.label',
      ),
      'subject' => 
      array (
        'label' => 'oro.task.subject.label',
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
      'taskPriority' => 
      array (
        'label' => 'oro.task.task_priority.label',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.task.owner.label',
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
        'taskPriority' => 
        array (
          'data_name' => 'tp.order',
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
          'label' => 'oro.task.task_priority.label',
          'type' => 'string',
          'data_name' => 'priorityLabel',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.task.owner.label',
          'data_name' => 'task.owner',
          'options' => 
          array (
            'lazy' => '@oro_user.provider.filter.user_choice_tree->shouldBeLazy',
            'data' => '@?oro_user.provider.filter.user_choice_tree->getList',
          ),
        ),
      ),
    ),
  ),
);