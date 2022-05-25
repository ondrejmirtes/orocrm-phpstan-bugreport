<?php return array (
  'process-definitions-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.workflow.processdefinition.entity_plural_label',
      'export' => false,
    ),
    'acl_resource' => 'oro_process_definition_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'process.name',
          1 => 'process.label',
          2 => 'process.relatedEntity',
          3 => 'process.executionOrder',
          4 => 'process.enabled',
          5 => 'process.createdAt',
          6 => 'process.name as processDefinition',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\WorkflowBundle\\Entity\\ProcessDefinition',
            'alias' => 'process',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.workflow.processdefinition.label.label',
      ),
      'relatedEntity' => 
      array (
        'label' => 'oro.workflow.processdefinition.related_entity.label',
        'data_name' => 'relatedEntity',
        'frontend_type' => 'select',
        'choices' => '@oro_workflow.datagrid.process_definition_entity_name_provider->getRelatedEntitiesChoice',
      ),
      'executionOrder' => 
      array (
        'label' => 'oro.workflow.processdefinition.execution_order.label',
        'frontend_type' => 'integer',
      ),
      'enabled' => 
      array (
        'label' => 'oro.workflow.processdefinition.enabled.label',
        'frontend_type' => 'boolean',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'properties' => 
    array (
      'name' => NULL,
      'processDefinition' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_process_definition_view',
        'params' => 
        array (
          0 => 'name',
        ),
      ),
      'activate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_process_activate',
        'params' => 
        array (
          0 => 'processDefinition',
        ),
      ),
      'deactivate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_process_deactivate',
        'params' => 
        array (
          0 => 'processDefinition',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'executionOrder' => 
        array (
          'data_name' => 'process.executionOrder',
        ),
        'label' => 
        array (
          'data_name' => 'process.label',
        ),
        'createdAt' => 
        array (
          'data_name' => 'process.createdAt',
        ),
      ),
      'default' => 
      array (
        'label' => 'ASC',
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_process_definition_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'activate' => 
      array (
        'type' => 'ajax',
        'acl_resource' => 'oro_process_definition_update',
        'label' => 'oro.workflow.action.process.activate',
        'icon' => 'ok',
        'link' => 'activate_link',
      ),
      'deactivate' => 
      array (
        'type' => 'ajax',
        'acl_resource' => 'oro_process_definition_update',
        'label' => 'oro.workflow.action.process.deactivate',
        'icon' => 'close',
        'link' => 'deactivate_link',
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_workflow.datagrid.action_permission_provider',
      1 => 'getProcessDefinitionPermissions',
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'type' => 'string',
          'data_name' => 'process.label',
        ),
        'relatedEntity' => 
        array (
          'type' => 'choice',
          'data_name' => 'process.relatedEntity',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_workflow.datagrid.process_definition_entity_name_provider->getRelatedEntitiesChoice',
            ),
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'process.createdAt',
        ),
      ),
    ),
  ),
);