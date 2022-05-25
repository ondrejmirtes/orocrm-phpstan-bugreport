<?php return array (
  'base-sales-b2bcustomer-leads-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
    'acl_resource' => 'oro_sales_lead_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'l.id',
          1 => 'l.name',
          2 => 'l.firstName',
          3 => 'l.lastName',
          4 => 'l.createdAt',
          5 => 'email.email',
          6 => 'phone.phone',
          7 => 's.id as status',
          8 => 'country.name as countryName',
          9 => 'address.postalCode as addressPostalCode',
          10 => 'CONCAT(
    CASE WHEN address.regionText IS NOT NULL
      THEN address.regionText
      ELSE region.name
    END, \'\'
) as regionLabel
',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
            'alias' => 'l',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'l.status',
              'alias' => 's',
            ),
            1 => 
            array (
              'join' => 'l.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            2 => 
            array (
              'join' => 'l.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
            3 => 
            array (
              'join' => 'l.addresses',
              'alias' => 'address',
              'conditionType' => 'WITH',
              'condition' => 'address.primary = true',
            ),
            4 => 
            array (
              'join' => 'address.country',
              'alias' => 'country',
            ),
            5 => 
            array (
              'join' => 'address.region',
              'alias' => 'region',
            ),
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_lead_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_lead_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_lead',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'l.name',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'data_name' => 'status',
          'enum_code' => 'lead_status',
        ),
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'l.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'l.lastName',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone.phone',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_lead_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_lead_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_lead_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);