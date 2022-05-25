<?php return array (
  'oro-sales-b2bcustomers-select-grid' => 
  array (
    'extends' => 'base-sales-b2bcustomers-grid',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'account.name as accountName',
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'c.account',
              'alias' => 'account',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'accountName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.account_name.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'accountName' => 
        array (
          'data_name' => 'accountName',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'accountName' => 
        array (
          'type' => 'string',
          'data_name' => 'accountName',
        ),
      ),
    ),
  ),
);