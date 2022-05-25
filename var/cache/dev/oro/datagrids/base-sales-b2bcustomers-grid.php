<?php return array (
  'base-sales-b2bcustomers-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
    'acl_resource' => 'oro_sales_b2bcustomer_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.name',
          2 => 'CASE WHEN c.lifetime IS NOT NULL THEN c.lifetime ELSE 0 END as lifetime',
          3 => 'phone.phone',
          4 => 'phone.id as phoneId',
          5 => 'email.email',
          6 => 'email.id as emailId',
          7 => 'c.createdAt',
          8 => 'c.updatedAt',
          9 => 'channel.name as channelName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
            'alias' => 'c',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'c.dataChannel',
              'alias' => 'channel',
            ),
            1 => 
            array (
              'join' => 'c.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
            2 => 
            array (
              'join' => 'c.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
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
      'channelName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.data_channel.label',
      ),
      'name' => 
      array (
        'label' => 'oro.sales.b2bcustomer.name.label',
      ),
      'lifetime' => 
      array (
        'label' => 'oro.sales.b2bcustomer.lifetime.label',
        'frontend_type' => 'currency',
        'inline_editing' => 
        array (
          'enable' => false,
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
      'phone' => 
      array (
        'label' => 'oro.sales.lead.phone_number.label',
        'frontend_type' => 'phone',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/text-editor-view',
          ),
          'save_api_accessor' => 
          array (
            'class' => 'orosales/js/datagrid/inline-editing/save-api-accessor',
            'field_name' => 'phone',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_b2bcustomer_phone',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_b2bcustomer_phone',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_SalesBundle_Entity_B2bCustomerPhone',
            ),
            'route_parameters_rename_map' => 
            array (
              'phoneId' => 'id',
            ),
          ),
        ),
      ),
      'email' => 
      array (
        'label' => 'oro.sales.b2bcustomer.email.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'validation_rules' => 
          array (
            'Email' => true,
          ),
          'save_api_accessor' => 
          array (
            'class' => 'orosales/js/datagrid/inline-editing/save-api-accessor',
            'field_name' => 'email',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_b2bcustomer_email',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_b2bcustomer_email',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_SalesBundle_Entity_B2bCustomerEmail',
            ),
            'route_parameters_rename_map' => 
            array (
              'emailId' => 'id',
            ),
          ),
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'channelName' => 
        array (
          'data_name' => 'channelName',
        ),
        'name' => 
        array (
          'data_name' => 'c.name',
        ),
        'lifetime' => 
        array (
          'data_name' => 'c.lifetime',
        ),
        'createdAt' => 
        array (
          'data_name' => 'c.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'c.updatedAt',
        ),
        'phone' => 
        array (
          'data_name' => 'phone.phone',
        ),
        'email' => 
        array (
          'data_name' => 'email.email',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'channelName' => 
        array (
          'type' => 'entity',
          'data_name' => 'channel.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\ChannelBundle\\Entity\\Channel',
              'choice_label' => 'name',
              'translatable_options' => false,
            ),
          ),
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'c.name',
        ),
        'lifetime' => 
        array (
          'type' => 'number-range',
          'data_name' => 'c.lifetime',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'c.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'c.updatedAt',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone.phone',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'phoneId' => NULL,
      'emailId' => NULL,
    ),
    'options' => 
    array (
      'entity_pagination' => true,
      'export' => true,
    ),
  ),
);