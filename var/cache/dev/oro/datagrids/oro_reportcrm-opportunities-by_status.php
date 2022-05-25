<?php return array (
  'oro_reportcrm-opportunities-by_status' => 
  array (
    'pageTitle' => 'oro.reportcrm.opportunities_by_status',
    'requiredFeatures' => 
    array (
      0 => 'sales_opportunity',
    ),
    'acl_resource' => 'oro_report_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
              'alias' => 'opportunity',
              'conditionType' => 'WITH',
              'condition' => 'opportunity.status = status',
            ),
          ),
        ),
        'select' => 
        array (
          0 => 'status.name as statusLabel',
          1 => 'status.priority as statusPriority',
          2 => 'COUNT(opportunity.id) as numberOfOpportunities',
          3 => 'SUM(
    CASE WHEN status.id IN (\'won\', \'lost\') THEN COALESCE(
        @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(closeRevenue, opportunity), 0
    ) ELSE 0 END
) as closeRevenue
',
          4 => 'SUM(
    COALESCE(
        @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, opportunity), 0
    )
) as budgetAmount
',
        ),
        'groupBy' => 'statusLabel',
      ),
    ),
    'totals' => 
    array (
      'total' => 
      array (
        'extends' => 'grand_total',
        'per_page' => true,
        'hide_if_one_page' => true,
        'columns' => 
        array (
          'statusLabel' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.page_total',
          ),
        ),
      ),
      'grand_total' => 
      array (
        'columns' => 
        array (
          'statusLabel' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.grand_total',
          ),
          'numberOfOpportunities' => 
          array (
            'expr' => 'COUNT(opportunity.id)',
          ),
          'closeRevenue' => 
          array (
            'expr' => 'SUM(CASE WHEN status.id IN (\'won\', \'lost\') THEN @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(closeRevenue, opportunity) ELSE 0 END)',
            'formatter' => 'currency',
          ),
          'budgetAmount' => 
          array (
            'expr' => 'SUM(COALESCE(@oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, opportunity), 0))',
            'formatter' => 'currency',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'statusPriority' => 
      array (
        'label' => 'statusPriority',
        'renderable' => false,
        'manageable' => false,
      ),
      'statusLabel' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.status',
      ),
      'numberOfOpportunities' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.number_of_opportunities',
        'frontend_type' => 'integer',
      ),
      'closeRevenue' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.close_revenue',
        'frontend_type' => 'currency',
      ),
      'budgetAmount' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.budget_amount',
        'frontend_type' => 'currency',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'statusLabel' => 
        array (
          'data_name' => 'statusLabel',
        ),
        'statusPriority' => 
        array (
          'data_name' => 'statusPriority',
        ),
        'numberOfOpportunities' => 
        array (
          'data_name' => 'numberOfOpportunities',
        ),
        'closeRevenue' => 
        array (
          'data_name' => 'closeRevenue',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'budgetAmount',
        ),
      ),
      'default' => 
      array (
        'statusPriority' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'statusLabel' => 
        array (
          'type' => 'enum',
          'data_name' => 'status.id',
          'enum_code' => 'opportunity_status',
        ),
        'numberOfOpportunities' => 
        array (
          'type' => 'number-range',
          'data_name' => 'numberOfOpportunities',
          'filter_by_having' => true,
        ),
        'closeRevenue' => 
        array (
          'type' => 'currency',
          'data_name' => 'closeRevenue',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_DECIMAL',
          ),
        ),
        'budgetAmount' => 
        array (
          'type' => 'currency',
          'data_name' => 'budgetAmount',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_DECIMAL',
          ),
        ),
        'closeDate' => 
        array (
          'label' => 'oro.sales.opportunity.close_date.label',
          'type' => 'date',
          'data_name' => 'opportunity.closeDate',
        ),
        'createdAt' => 
        array (
          'label' => 'oro.sales.opportunity.created_at.label',
          'type' => 'datetime',
          'data_name' => 'opportunity.createdAt',
        ),
        'updatedAt' => 
        array (
          'label' => 'oro.sales.opportunity.updated_at.label',
          'type' => 'datetime',
          'data_name' => 'opportunity.updatedAt',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.reportcrm.datagrid.default_entity_hint',
      'export' => true,
      'entity_pagination' => true,
    ),
  ),
);