<?php return array (
  'dashboard-my-sales-opportunity-grid' => 
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
          0 => 'o.id',
          1 => 'o.name',
          2 => 'o.budgetAmountValue as budgetAmount',
          3 => 'o.budgetAmountCurrency as budgetAmountCurrency',
          4 => 's.id as status',
          5 => 'o.probability',
          6 => 'o.closeDate',
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
              'join' => 'o.status',
              'alias' => 's',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.sales.opportunity.name.label',
        'frontend_type' => 'html',
        'type' => 'link',
        'route' => 'oro_sales_opportunity_view',
        'params' => 
        array (
          'id' => 'id',
        ),
      ),
      'budgetAmount' => 
      array (
        'label' => 'oro.sales.opportunity.budget_amount.label',
        'frontend_type' => 'multi-currency',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_currency.converter.currency_to_string',
          1 => 'convert',
        ),
        'multicurrency_config' => 
        array (
          'original_field' => 'budgetAmount',
          'value_field' => 'budgetAmountValue',
          'currency_field' => 'budgetAmountCurrency',
          'sortable' => false,
        ),
      ),
      'status' => 
      array (
        'frontend_type' => 'select',
        'label' => 'oro.sales.opportunity.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'opportunity_status\')',
      ),
      'probability' => 
      array (
        'label' => 'oro.sales.opportunity.probability.label',
        'frontend_type' => 'percent',
      ),
      'closeDate' => 
      array (
        'label' => 'oro.sales.opportunity.close_date.label',
        'frontend_type' => 'date',
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
        'budgetAmount' => 
        array (
          'data_name' => 'o.budgetAmountValue',
        ),
        'status' => 
        array (
          'data_name' => 'o.status',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
      'toolbarOptions' => 
      array (
        'hide' => true,
        'pageSize' => 
        array (
          'items' => 
          array (
            0 => 10,
          ),
          'default_per_page' => 10,
        ),
      ),
    ),
  ),
);