<?php return array (
  'oro-integration-status-grid' => 
  array (
    'acl_resource' => 'oro_integration_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 's.code',
          1 => 's.date',
          2 => 's.connector',
          3 => 's.message',
          4 => 'i.type as integrationType',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\IntegrationBundle\\Entity\\Status',
            'alias' => 's',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 's.channel',
              'alias' => 'i',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 's.channel = :integrationId',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'code' => 
      array (
        'label' => 'oro.integration.integration_status.code.label',
        'frontend_type' => 'select',
        'choices' => 
        array (
          'oro.integration.integration_status.competed.label' => 1,
          'oro.integration.integration_status.failed.label' => 2,
        ),
      ),
      'connector' => 
      array (
        'type' => 'callback',
        'label' => 'oro.integration.integration_status.connector.label',
        'callable' => '@oro_integration.datagrid.status_grid_helper->connectorCodeProperty()',
      ),
      'message' => 
      array (
        'label' => 'oro.integration.integration_status.message.label',
        'type' => 'twig',
        'template' => '@OroIntegration/Integration/Datagrid/message.html.twig',
        'frontend_type' => 'html',
      ),
      'date' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'code' => 
        array (
          'data_name' => 's.code',
        ),
        'date' => 
        array (
          'data_name' => 's.date',
        ),
        'connector' => 
        array (
          'data_name' => 's.connector',
        ),
      ),
      'default' => 
      array (
        'date' => 'DESC',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'code' => 
        array (
          'data_name' => 's.code',
          'type' => 'choice',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.integration.integration_status.competed.label' => '1',
                'oro.integration.integration_status.failed.label' => '2',
              ),
            ),
          ),
        ),
        'connector' => 
        array (
          'type' => 'choice',
          'data_name' => 's.connector',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
              ),
            ),
          ),
        ),
        'message' => 
        array (
          'type' => 'string',
          'data_name' => 's.message',
        ),
        'date' => 
        array (
          'type' => 'datetime',
          'data_name' => 's.date',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.integration.integration.statuses.label',
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
    ),
  ),
);