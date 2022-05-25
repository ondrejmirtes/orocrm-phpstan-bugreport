<?php return array (
  'base-sales-b2bcustomer-opportunities-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
    'acl_resource' => 'oro_sales_opportunity_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'o.id as id',
          1 => 'o.name',
          2 => 'o.createdAt',
          3 => 'o.closeDate',
          4 => 'o.probability',
          5 => 'o.budgetAmountValue as budgetAmount',
          6 => 'o.budgetAmountCurrency as budgetAmountCurrency',
          7 => 'CONCAT_WS(\' \', contact.firstName, contact.lastName) as contactName',
          8 => 's.id as status',
          9 => 'email.email as primaryEmail',
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
          ),
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
          'data_name' => 'o.name',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'o.createdAt',
        ),
        'closeDate' => 
        array (
          'type' => 'date',
          'data_name' => 'o.closeDate',
        ),
        'budgetAmount' => 
        array (
          'type' => 'currency',
          'data_name' => 'budgetAmount',
        ),
        'budgetAmountCurrency' => 
        array (
          'type' => 'choice',
          'data_name' => 'budgetAmountCurrency',
          'label' => 'oro.sales.opportunity.budget_amount_currency.label',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_currency.helper.currency_name->getCurrencyChoices(\'full_name\')',
              'multiple' => true,
            ),
          ),
        ),
        'probability' => 
        array (
          'type' => 'percent',
          'data_name' => 'o.probability',
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
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'o.budgetAmountValue',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'o.contact',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_opportunity_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_opportunity_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_opportunity',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_opportunity_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_opportunity_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_opportunity_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
  ),
);