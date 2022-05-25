<?php return array (
  'oro-integration-grid' => 
  array (
    'acl_resource' => 'oro_integration_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.name',
          2 => 'c.type',
          3 => 'c.editMode',
          4 => 'CASE WHEN c.enabled = true THEN \'enabled\' ELSE \'disabled\' END as enabled',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Channel',
            'alias' => 'c',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.integration.integration.name.label',
      ),
      'type' => 
      array (
        'label' => 'oro.integration.integration.type.label',
        'type' => 'twig',
        'template' => '@OroIntegration/Integration/Datagrid/type.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'choices' => '@oro_integration.manager.types_registry->getAvailableChannelTypesChoiceList()',
          'registry' => '@oro_integration.manager.types_registry',
        ),
      ),
      'enabled' => 
      array (
        'label' => 'oro.integration.integration.enabled.label',
        'frontend_type' => 'select',
        'choices' => 
        array (
          'oro.integration.integration.enabled.active.label' => 'enabled',
          'oro.integration.integration.enabled.inactive.label' => 'disabled',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_integration_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'schedule_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_integration_schedule',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'c.name',
        ),
        'type' => 
        array (
          'data_name' => 'c.type',
        ),
        'enabled' => 
        array (
          'data_name' => 'c.enabled',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'c.name',
          'type' => 'string',
        ),
        'type' => 
        array (
          'data_name' => 'c.type',
          'type' => 'choice',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_integration.manager.types_registry->getAvailableChannelTypesChoiceList',
            ),
          ),
        ),
        'enabled' => 
        array (
          'data_name' => 'c.enabled',
          'type' => 'choice',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.integration.integration.enabled.inactive.label' => 0,
                'oro.integration.integration.enabled.active.label' => 1,
              ),
            ),
          ),
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'link' => 'update_link',
        'acl_resource' => 'oro_integration_update',
        'icon' => 'pencil-square-o',
        'label' => 'oro.grid.action.update',
        'rowAction' => true,
        'order' => 10,
      ),
      'schedule' => 
      array (
        'type' => 'schedule-sync',
        'link' => 'schedule_link',
        'acl_resource' => 'oro_integration_update',
        'icon' => 'refresh',
        'label' => 'oro.integration.datagrid.action.schedule_sync',
        'order' => 30,
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_integration.datagrid.action_configuration',
      1 => 'getIsSyncAvailableCondition',
    ),
    'options' => 
    array (
      'entityHint' => 'oro.integration.channel.entity_plural_label',
      'entity_pagination' => true,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
    ),
  ),
);