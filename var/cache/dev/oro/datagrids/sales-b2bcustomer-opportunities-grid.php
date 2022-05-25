<?php return array (
  'sales-b2bcustomer-opportunities-grid' => 
  array (
    'extends' => 'base-sales-b2bcustomer-opportunities-grid',
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
              'join' => 'o.customerAssociation',
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
        'label' => 'oro.sales.opportunity.name.label',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'closeDate' => 
      array (
        'label' => 'oro.sales.opportunity.close_date.label',
        'frontend_type' => 'date',
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
        ),
      ),
      'probability' => 
      array (
        'label' => 'oro.sales.opportunity.probability.label',
        'frontend_type' => 'percent',
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
    ),
    'sorters' => 
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
          'data_name' => 'email.email',
        ),
      ),
      'default' => 
      array (
        'createdAt' => 'DESC',
      ),
    ),
  ),
);