<?php return array (
  'sales-funnel-lead-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
    'options' => 
    array (
      'entityHint' => 'oro.sales.lead.entity_plural_label',
    ),
    'acl_resource' => 'oro_sales_lead_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'lead.id',
          1 => 'lead.name',
          2 => 'lead.firstName',
          3 => 'lead.lastName',
          4 => 'email.email',
          5 => 'phone.phone',
          6 => 'country.name as countryName',
          7 => 'address.postalCode as addressPostalCode',
          8 => 'CONCAT(
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
            'alias' => 'lead',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'lead.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            1 => 
            array (
              'join' => 'lead.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
            2 => 
            array (
              'join' => 'lead.addresses',
              'alias' => 'address',
              'conditionType' => 'WITH',
              'condition' => 'address.primary = true',
            ),
            3 => 
            array (
              'join' => 'address.country',
              'alias' => 'country',
            ),
            4 => 
            array (
              'join' => 'address.region',
              'alias' => 'region',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'lead.status NOT IN(\'qualified\', \'canceled\')',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.sales.lead.id.label',
        'renderable' => false,
      ),
      'name' => 
      array (
        'label' => 'oro.sales.lead.name.label',
      ),
      'firstName' => 
      array (
        'label' => 'oro.sales.lead.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.sales.lead.last_name.label',
      ),
      'email' => 
      array (
        'label' => 'oro.sales.lead.email.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.sales.lead.phone_number.label',
        'frontend_type' => 'phone',
      ),
      'countryName' => 
      array (
        'label' => 'oro.sales.lead.datagrid.country',
      ),
      'regionLabel' => 
      array (
        'label' => 'oro.sales.lead.datagrid.region',
      ),
      'addressPostalCode' => 
      array (
        'label' => 'oro.sales.lead.datagrid.postal_code',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'lead.name',
        ),
        'firstName' => 
        array (
          'data_name' => 'lead.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'lead.lastName',
        ),
        'email' => 
        array (
          'data_name' => 'email.email',
        ),
        'phone' => 
        array (
          'data_name' => 'phone.phone',
        ),
        'countryName' => 
        array (
          'data_name' => 'address.country',
        ),
        'regionLabel' => 
        array (
          'data_name' => 'regionLabel',
        ),
        'addressPostalCode' => 
        array (
          'data_name' => 'addressPostalCode',
        ),
      ),
      'default' => 
      array (
        'firstName' => 'ASC',
        'lastName' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'type' => 'number-range',
          'data_name' => 'lead.id',
          'renderable' => false,
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'lead.name',
        ),
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'lead.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'lead.lastName',
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
        'countryName' => 
        array (
          'type' => 'entity',
          'data_name' => 'address.country',
          'renderable' => false,
          'options' => 
          array (
            'lazy' => true,
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\AddressBundle\\Entity\\Country',
              'choice_label' => 'name',
              'query_builder' => '@oro_sales.lead.datagrid_helper->getCountryFilterQueryBuilder',
              'translatable_options' => false,
            ),
          ),
        ),
        'regionLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'regionLabel',
          'renderable' => false,
        ),
        'addressPostalCode' => 
        array (
          'type' => 'string',
          'data_name' => 'addressPostalCode',
          'renderable' => false,
        ),
      ),
    ),
  ),
);