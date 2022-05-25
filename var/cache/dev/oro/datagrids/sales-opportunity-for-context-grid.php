<?php return array (
  'sales-opportunity-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
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
    'acl_resource' => 'oro_sales_opportunity_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'o.id',
          1 => 'o.name',
          2 => 'o.createdAt',
          3 => 'CONCAT_WS(\' \', contact.firstName, contact.lastName) as contactName',
          4 => 's.id as status',
          5 => 'email.email as primaryEmail',
          6 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'alias' => 'o',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'o.contact',
              'alias' => 'contact',
            ),
            1 => 
            array (
              'join' => 'o.status',
              'alias' => 's',
            ),
            2 => 
            array (
              'join' => 'contact.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            3 => 
            array (
              'join' => 'o.owner',
              'alias' => 'owner',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.sales.opportunity.id.label',
      ),
      'name' => 
      array (
        'label' => 'oro.sales.opportunity.name.label',
      ),
      'status' => 
      array (
        'frontend_type' => 'select',
        'label' => 'oro.sales.opportunity.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'opportunity_status\')',
      ),
      'primaryEmail' => 
      array (
        'label' => 'oro.contact.email.label',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.sales.opportunity.owner.label',
      ),
      'createdAt' => 
      array (
        'renderable' => false,
        'frontend_type' => 'datetime',
      ),
    ),
    'fields_acl' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'o.name',
        ),
        'statusLabel' => 
        array (
          'data_name' => 'o.status',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'o.contact',
        ),
        'ownerName' => 
        array (
          'data_name' => 'o.owner',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'o.name',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'email.email',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
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
          'data_name' => 'o.name',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'data_name' => 'status',
          'enum_code' => 'opportunity_status',
        ),
        'primaryEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
        'owner' => 
        array (
          'type' => 'entity',
          'label' => 'oro.user.owner.label',
          'data_name' => 'o.owner',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
              'multiple' => true,
              'choice_label' => 'fullName',
              'translatable_options' => false,
            ),
          ),
        ),
      ),
    ),
  ),
);