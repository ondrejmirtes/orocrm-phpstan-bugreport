<?php return array (
  'oro_reportcrm-accounts-by_opportunities' => 
  array (
    'pageTitle' => 'oro.reportcrm.accounts_by_opportunities',
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
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'alias' => 'o',
          ),
        ),
        'select' => 
        array (
          0 => 'a.id',
          1 => 'a.name',
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'o.customerAssociation',
              'alias' => 'c',
            ),
            1 => 
            array (
              'join' => 'c.account',
              'alias' => 'a',
            ),
            2 => 
            array (
              'join' => 'o.status',
              'alias' => 's',
            ),
          ),
        ),
        'groupBy' => 'a.id',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_account_view',
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
        'acl_resource' => 'oro_account_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
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
          'name' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.page_total',
          ),
        ),
      ),
      'grand_total' => 
      array (
        'columns' => 
        array (
          'name' => 
          array (
            'label' => 'oro.reportcrm.datagrid.columns.grand_total',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.account_name',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'a.name',
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
          'data_name' => 'a.name',
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
    ),
    'options' => 
    array (
      'entityHint' => 'oro.reportcrm.datagrid.default_entity_hint',
      'export' => true,
      'entity_pagination' => true,
    ),
  ),
);