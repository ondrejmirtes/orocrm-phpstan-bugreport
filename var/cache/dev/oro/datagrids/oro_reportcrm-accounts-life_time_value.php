<?php return array (
  'oro_reportcrm-accounts-life_time_value' => 
  array (
    'pageTitle' => 'oro.reportcrm.accounts_life_time_value',
    'acl_resource' => 'oro_report_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'a.id',
          1 => 'a.name',
          2 => 'SUM( CASE WHEN lifetimeHistory.amount is NULL THEN 0 ELSE lifetimeHistory.amount END ) as value',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\AccountBundle\\Entity\\Account',
            'alias' => 'a',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\ChannelBundle\\Entity\\LifetimeValueHistory',
              'alias' => 'lifetimeHistory',
              'conditionType' => 'WITH',
              'condition' => 'lifetimeHistory.account = a and lifetimeHistory.status = true',
            ),
          ),
        ),
        'groupBy' => 'a.id',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.reportcrm.datagrid.columns.account_name',
      ),
      'value' => 
      array (
        'label' => 'oro.account.lifetime_value.label',
        'frontend_type' => 'currency',
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
          'value' => 
          array (
            'expr' => 'SUM( CASE WHEN lifetimeHistory.amount is NULL THEN 0 ELSE lifetimeHistory.amount END )',
            'formatter' => 'currency',
          ),
        ),
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
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'a.name',
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