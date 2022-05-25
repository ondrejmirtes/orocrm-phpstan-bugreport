<?php return array (
  'oro_reportcrm-leads-by_date' => 
  array (
    'pageTitle' => 'oro.reportcrm.leads_by_date',
    'requiredFeatures' => 
    array (
      0 => 'sales_lead',
    ),
    'acl_resource' => 'oro_report_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'COUNT(l.id) as leadsCount',
          1 => 'DATE(@oro_datagrid.helper.date->getConvertTimezoneExpression(l.createdAt)) as createdDate',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
            'alias' => 'l',
          ),
        ),
        'groupBy' => 'createdDate',
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
          'createdDate' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.page_total',
          ),
        ),
      ),
      'grand_total' => 
      array (
        'columns' => 
        array (
          'createdDate' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.grand_total',
          ),
          'leadsCount' => 
          array (
            'expr' => 'COUNT(l.id)',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'createdDate' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.created_date',
        'frontend_type' => 'date',
      ),
      'leadsCount' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.leads_count',
        'frontend_type' => 'integer',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'createdDate' => 
        array (
          'data_name' => 'createdDate',
        ),
        'leadsCount' => 
        array (
          'data_name' => 'leadsCount',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'createdDate' => 
        array (
          'type' => 'date',
          'data_name' => 'createdDate',
          'filter_by_having' => true,
        ),
        'leadsCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'leadsCount',
          'filter_by_having' => true,
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