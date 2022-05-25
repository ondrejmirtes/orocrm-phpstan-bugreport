<?php return array (
  'tasks-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\TaskBundle\\Entity\\Task',
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
          2 => 'task.description',
          3 => 'task.dueDate',
          4 => 'tp.name as taskPriority',
          5 => 'tp.label as priorityLabel',
          6 => 'CONCAT_WS(\' \', own.firstName, own.lastName) as ownerName',
          7 => 'own.id as owner',
          8 => 'task.createdAt',
          9 => 'task.updatedAt',
          10 => 'ts.id as status',
          11 => 'ts.name as statusLabel',
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
          'inner' => 
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
    ),
    'inline_editing' => 
    array (
      'enable' => true,
    ),
    'columns' => 
    array (
      'subject' => 
      array (
        'label' => 'oro.task.subject.label',
      ),
      'dueDate' => 
      array (
        'label' => 'oro.task.due_date.label',
        'frontend_type' => 'datetime',
      ),
      'status' => 
      array (
        'label' => 'oro.task.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'task_status\')',
        'inline_editing' => 
        array (
          'enable' => true,
        ),
      ),
      'taskPriority' => 
      array (
        'label' => 'oro.task.task_priority.label',
        'frontend_type' => 'select',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.task.owner.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/related-id-relation-editor-view',
            'view_options' => 
            array (
              'value_field_name' => 'owner',
            ),
          ),
          'autocomplete_api_accessor' => 
          array (
            'class' => 'orouser/js/tools/acl-users-search-api-accessor',
            'permission_check_entity_name' => 'Oro_Bundle_TaskBundle_Entity_Task',
          ),
        ),
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
      ),
      'tags' => 
      array (
      ),
      'contexts' => 
      array (
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
        'status' => 
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
        'createdAt' => 
        array (
          'data_name' => 'task.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'task.updatedAt',
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
        'status' => 
        array (
          'type' => 'enum',
          'data_name' => 'task.status',
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
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'task.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'task.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'task.updatedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'owner' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_task_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_task_update',
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
        'acl_resource' => 'oro_task_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_task_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
      'contexts' => 
      array (
        'enabled' => true,
      ),
    ),
  ),
);