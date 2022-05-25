<?php return array (
  'oro_reportcrm-opportunities-won_by_period' => 
  array (
    'pageTitle' => 'oro.reportcrm.opportunities_won_by_period',
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
          0 => 'CONCAT(MONTH(o.closeDate), \' / \', YEAR(o.closeDate)) as monthPeriod',
          1 => 'MAX(o.closeDate) as monthPeriodSorting',
          2 => 'CONCAT(QUARTER(o.closeDate), \' / \', YEAR(o.closeDate)) as quarterPeriod',
          3 => 'MAX(o.closeDate) as quarterPeriodSorting',
          4 => 'YEAR(o.closeDate) as yearPeriod',
          5 => 'SUM(
    @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(closeRevenue, o)
) as value
',
          6 => 'COUNT(o.id) as cnt',
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
          ),
        ),
        'groupBy' => 'o.closeDate',
        'where' => 
        array (
          'and' => 
          array (
            0 => 's.id = \'won\'',
            1 => 'o.closeDate IS NOT NULL',
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'monthPeriod' => NULL,
      'quarterPeriod' => NULL,
      'yearPeriod' => NULL,
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
          'period' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.page_total',
          ),
        ),
      ),
      'grand_total' => 
      array (
        'columns' => 
        array (
          'period' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.grand_total',
          ),
          'cnt' => 
          array (
            'expr' => 'COUNT( o.id )',
          ),
          'value' => 
          array (
            'expr' => 'SUM( @oro_currency.query.currency_transformer->getTransformSelectQueryForDataGrid(closeRevenue, o) )',
            'formatter' => 'currency',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'period' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.period',
      ),
      'cnt' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.number_won',
        'frontend_type' => 'integer',
      ),
      'value' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.total_value',
        'frontend_type' => 'currency',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'period' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'cnt' => 
        array (
          'data_name' => 'cnt',
        ),
        'value' => 
        array (
          'data_name' => 'value',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'period' => 
        array (
          'type' => 'oro_period_filter',
          'data_name' => 'period',
          'options' => 
          array (
            'populate_default' => false,
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.reportcrm.datagrid.filters.period.monthly' => 'monthPeriod',
                'oro.reportcrm.datagrid.filters.period.quarterly' => 'quarterPeriod',
                'oro.reportcrm.datagrid.filters.period.qearly' => 'yearPeriod',
              ),
            ),
          ),
        ),
        'cnt' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cnt',
          'filter_by_having' => true,
        ),
        'value' => 
        array (
          'type' => 'currency',
          'data_name' => 'value',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_DECIMAL',
          ),
        ),
        'closeDate' => 
        array (
          'type' => 'date',
          'label' => 'oro.reportcrm.datagrid.columns.close_date',
          'data_name' => 'o.closeDate',
        ),
        'createdAt' => 
        array (
          'type' => 'date',
          'label' => 'oro.reportcrm.datagrid.columns.created_date',
          'data_name' => 'o.createdAt',
        ),
      ),
      'default' => 
      array (
        'period' => 
        array (
          'value' => 'monthPeriod',
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