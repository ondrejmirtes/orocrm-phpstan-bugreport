<?php return array (
  'oro_reportcrm-opportunities-total_forecast' => 
  array (
    'pageTitle' => 'oro.reportcrm.opportunities.total_forecast',
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
        'select' => 
        array (
          0 => 'CONCAT(oo.firstName, CONCAT(\' \', oo.lastName)) as ownerName',
          1 => 'COUNT( o.id ) as inProgressCount',
          2 => 'SUM(
    @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, o)
) as budgetAmount
',
          3 => 'SUM(
    @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, o) * o.probability
) as weightedForecast
',
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
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'o.status',
              'alias' => 's',
            ),
            1 => 
            array (
              'join' => 'o.owner',
              'alias' => 'oo',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 's.id NOT IN (\'lost\', \'won\')',
          ),
        ),
        'groupBy' => 'oo.id',
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
          'ownerName' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.page_total',
          ),
        ),
      ),
      'grand_total' => 
      array (
        'columns' => 
        array (
          'ownerName' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.grand_total',
          ),
          'inProgressCount' => 
          array (
            'expr' => 'COUNT( o.id )',
          ),
          'budgetAmount' => 
          array (
            'expr' => 'SUM( @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, o) )',
            'formatter' => 'currency',
          ),
          'weightedForecast' => 
          array (
            'expr' => 'SUM( @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(budgetAmount, o) * o.probability )',
            'formatter' => 'currency',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'ownerName' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.ownerName',
        'frontend_type' => 'string',
      ),
      'inProgressCount' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.inProgressCount',
        'frontend_type' => 'integer',
      ),
      'budgetAmount' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.budgetAmount',
        'frontend_type' => 'currency',
      ),
      'weightedForecast' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.weightedForecast',
        'frontend_type' => 'currency',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'inProgressCount' => 
        array (
          'data_name' => 'inProgressCount',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'budgetAmount',
        ),
        'weightedForecast' => 
        array (
          'data_name' => 'weightedForecast',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'ownerName' => 
        array (
          'type' => 'choice-tree',
          'data_name' => 'o.owner',
          'autocomplete_alias' => 'users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'inProgressCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'inProgressCount',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_INTEGER',
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
        'weightedForecast' => 
        array (
          'type' => 'currency',
          'data_name' => 'weightedForecast',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_DECIMAL',
          ),
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.reportcrm.datagrid.default_entity_hint',
      'export' => true,
    ),
    'entity_pagination' => true,
  ),
);