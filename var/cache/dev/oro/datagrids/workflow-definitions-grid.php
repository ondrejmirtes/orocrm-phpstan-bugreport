<?php return array (
  'workflow-definitions-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.workflow.workflowdefinition.entity_plural_label',
      'export' => false,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
    ),
    'acl_resource' => 'oro_workflow_definition_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'w.name as id',
          1 => 'w.name',
          2 => 'w.name as workflowDefinition',
          3 => 'w.relatedEntity',
          4 => 'w.relatedEntity as entityClass',
          5 => 'w.active',
          6 => 'w.label',
          7 => 'w.applications',
          8 => 'w.system',
          9 => 'w.priority',
          10 => 'w.exclusiveActiveGroups',
          11 => 'w.exclusiveRecordGroups',
          12 => 'w.createdAt',
          13 => 'w.configuration',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\WorkflowBundle\\Entity\\WorkflowDefinition',
            'alias' => 'w',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.label.label',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_workflow.helper.translation',
          1 => 'findTranslation',
        ),
        'params' => 
        array (
          0 => 'label',
        ),
      ),
      'relatedEntity' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.related_entity.label',
        'data_name' => 'relatedEntity',
        'frontend_type' => 'select',
        'choices' => '@oro_workflow.datagrid.workflow_definition_entity_name_provider->getRelatedEntitiesChoice',
      ),
      'active' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.active.label',
        'frontend_type' => 'boolean',
      ),
      'system' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.system.label',
        'frontend_type' => 'boolean',
      ),
      'priority' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.priority.label',
        'frontend_type' => 'integer',
      ),
      'applications' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.applications.label',
        'type' => 'twig',
        'template' => '@OroWorkflow/Datagrid/Column/applications.html.twig',
        'frontend_type' => 'html',
      ),
      'exclusiveActiveGroups' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.exclusive_active_groups.label',
        'type' => 'twig',
        'template' => '@OroWorkflow/Datagrid/Column/exclusiveGroups.html.twig',
        'frontend_type' => 'html',
      ),
      'exclusiveRecordGroups' => 
      array (
        'label' => 'oro.workflow.workflowdefinition.exclusive_record_groups.label',
        'type' => 'twig',
        'template' => '@OroWorkflow/Datagrid/Column/exclusiveGroups.html.twig',
        'frontend_type' => 'html',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'name' => NULL,
      'workflowDefinition' => NULL,
      'entityClass' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_workflow_definition_view',
        'params' => 
        array (
          0 => 'name',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_workflow_definition_update',
        'params' => 
        array (
          0 => 'name',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_workflow_definition_delete',
        'params' => 
        array (
          0 => 'workflowDefinition',
        ),
      ),
      'activate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_workflow_activate',
        'params' => 
        array (
          0 => 'workflowDefinition',
        ),
      ),
      'deactivate_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_workflow_deactivate',
        'params' => 
        array (
          0 => 'workflowDefinition',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'active' => 
        array (
          'data_name' => 'w.active',
        ),
        'system' => 
        array (
          'data_name' => 'w.system',
        ),
        'priority' => 
        array (
          'data_name' => 'w.priority',
        ),
        'createdAt' => 
        array (
          'data_name' => 'w.createdAt',
        ),
        'relatedEntity' => 
        array (
          'data_name' => 'w.relatedEntity',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_workflow_definition_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'activate' => 
      array (
        'type' => 'workflow-activate',
        'acl_resource' => 'oro_workflow_definition_update',
        'label' => 'oro.workflow.workflowdefinition.datagrid.activate',
        'icon' => 'check',
        'link' => 'activate_link',
      ),
      'deactivate' => 
      array (
        'type' => 'workflow-deactivate',
        'acl_resource' => 'oro_workflow_definition_update',
        'label' => 'oro.workflow.workflowdefinition.datagrid.deactivate',
        'icon' => 'close',
        'link' => 'deactivate_link',
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_workflow_definition_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_workflow_definition_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_workflow.datagrid.action_permission_provider',
      1 => 'getWorkflowDefinitionPermissions',
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'relatedEntity' => 
        array (
          'type' => 'choice',
          'data_name' => 'w.relatedEntity',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_workflow.datagrid.workflow_definition_entity_name_provider->getRelatedEntitiesChoice',
            ),
          ),
        ),
        'applications' => 
        array (
          'type' => 'string',
          'data_name' => 'w.applications',
        ),
        'active' => 
        array (
          'type' => 'boolean',
          'data_name' => 'w.active',
        ),
        'system' => 
        array (
          'type' => 'boolean',
          'data_name' => 'w.system',
        ),
        'priority' => 
        array (
          'type' => 'number',
          'data_name' => 'w.priority',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'w.createdAt',
        ),
        'exclusiveActiveGroups' => 
        array (
          'type' => 'string',
          'data_name' => 'w.exclusiveActiveGroups',
        ),
        'exclusiveRecordGroups' => 
        array (
          'type' => 'string',
          'data_name' => 'w.exclusiveRecordGroups',
        ),
      ),
    ),
  ),
);