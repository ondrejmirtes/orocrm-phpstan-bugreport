<?php return array (
  'sales-funnel-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel',
    'options' => 
    array (
      'entityHint' => 'oro.sales.salesfunnel.entity_plural_label',
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_sales_salesfunnel_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'salesFunnel.id',
          1 => 'salesFunnel.startDate',
          2 => 'lead.name as leadName',
          3 => 'opportunity.name as opportunityName',
          4 => 'opportunity.budgetAmountValue as budgetAmount',
          5 => 'opportunity.closeRevenueValue as closeRevenue',
          6 => 'opportunity.budgetAmountCurrency as budgetAmountCurrency',
          7 => 'opportunity.closeRevenueCurrency as closeRevenueCurrency',
          8 => 'opportunity.probability as opportunityProbability',
          9 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel',
            'alias' => 'salesFunnel',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'salesFunnel.lead',
              'alias' => 'lead',
            ),
            1 => 
            array (
              'join' => 'salesFunnel.opportunity',
              'alias' => 'opportunity',
            ),
            2 => 
            array (
              'join' => 'salesFunnel.owner',
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
        'label' => 'oro.sales.salesfunnel.id.label',
      ),
      'startDate' => 
      array (
        'label' => 'oro.sales.salesfunnel.start_date.label',
        'frontend_type' => 'date',
      ),
      'leadName' => 
      array (
        'label' => 'oro.sales.salesfunnel.lead.label',
      ),
      'opportunityName' => 
      array (
        'label' => 'oro.sales.salesfunnel.opportunity.label',
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
        'params' => 
        array (
          'value' => 'budgetAmount',
          'currency' => 'budgetAmountCurrency',
        ),
        'multicurrency_config' => 
        array (
          'original_field' => 'budgetAmount',
          'value_field' => 'budgetAmountValue',
          'currency_field' => 'budgetAmountCurrency',
          'entity_alias' => 'opportunity',
        ),
      ),
      'closeRevenue' => 
      array (
        'label' => 'oro.sales.opportunity.close_revenue.label',
        'frontend_type' => 'multi-currency',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_currency.converter.currency_to_string',
          1 => 'convert',
        ),
        'params' => 
        array (
          'value' => 'closeRevenue',
          'currency' => 'closeRevenueCurrency',
        ),
        'multicurrency_config' => 
        array (
          'original_field' => 'closeRevenue',
          'value_field' => 'closeRevenueValue',
          'currency_field' => 'closeRevenueCurrency',
          'entity_alias' => 'opportunity',
        ),
      ),
      'opportunityProbability' => 
      array (
        'label' => 'oro.sales.opportunity.probability.label',
        'frontend_type' => 'percent',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.sales.salesfunnel.owner.label',
      ),
    ),
    'properties' => 
    array (
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_salesfunnel_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_salesfunnel_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_salesfunnel',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'salesFunnel.id',
        ),
        'startDate' => 
        array (
          'data_name' => 'salesFunnel.startDate',
        ),
        'leadName' => 
        array (
          'data_name' => 'lead.name',
        ),
        'opportunityName' => 
        array (
          'data_name' => 'opportunity.name',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'opportunity.budgetAmountValue',
        ),
        'closeRevenue' => 
        array (
          'data_name' => 'opportunity.closeRevenueValue',
        ),
        'opportunityProbability' => 
        array (
          'data_name' => 'opportunity.probability',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
      ),
      'default' => 
      array (
        'startDate' => 'DESC',
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_salesfunnel_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_salesfunnel_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_salesfunnel_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'type' => 'number-range',
          'data_name' => 'salesFunnel.id',
        ),
        'startDate' => 
        array (
          'type' => 'date',
          'data_name' => 'salesFunnel.startDate',
        ),
        'leadName' => 
        array (
          'type' => 'string',
          'data_name' => 'lead.name',
        ),
        'opportunityName' => 
        array (
          'type' => 'string',
          'data_name' => 'opportunity.name',
        ),
        'closeRevenue' => 
        array (
          'type' => 'currency',
          'data_name' => 'closeRevenue',
        ),
        'closeRevenueCurrency' => 
        array (
          'type' => 'choice',
          'data_name' => 'closeRevenueCurrency',
          'label' => 'oro.sales.opportunity.close_revenue_currency.label',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_currency.helper.currency_name->getCurrencyChoices(\'full_name\')',
              'multiple' => true,
            ),
          ),
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
        'opportunityProbability' => 
        array (
          'type' => 'percent',
          'data_name' => 'opportunity.probability',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'salesFunnel.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'salesFunnel.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
      ),
    ),
  ),
);