<?php return array (
  'sales-lead-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
    'options' => 
    array (
      'entityHint' => 'oro.sales.lead.entity_plural_label',
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
          2 => 'l.createdAt',
          3 => 'l.firstName',
          4 => 'l.lastName',
          5 => 'email.email',
          6 => 's.id as status',
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
        'label' => 'oro.sales.lead.id.label',
      ),
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
      'email' => 
      array (
        'label' => 'oro.sales.lead.email.label',
      ),
      'createdAt' => 
      array (
        'renderable' => false,
        'frontend_type' => 'datetime',
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
        'email' => 
        array (
          'data_name' => 'email.email',
        ),
        'createdAt' => 
        array (
          'data_name' => 'l.createdAt',
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
      ),
    ),
  ),
);