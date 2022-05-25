<?php return array (
  'sales-b2bcustomer-leads-grid' => 
  array (
    'extends' => 'base-sales-b2bcustomer-leads-grid',
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'l.customerAssociation',
              'alias' => 'ca',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'ca.b2b_customer_188b774c = :customerId',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'customerId',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.sales.lead.name.label',
      ),
      'status' => 
      array (
        'frontend_type' => 'select',
        'label' => 'oro.sales.lead.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'lead_status\')',
      ),
      'firstName' => 
      array (
        'label' => 'oro.sales.lead.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.sales.lead.last_name.label',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'email' => 
      array (
        'label' => 'oro.sales.lead.email.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.sales.lead.phone_number.label',
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
          'data_name' => 'l.name',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'firstName' => 
        array (
          'data_name' => 'l.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'l.lastName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'l.createdAt',
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
        'createdAt' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
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