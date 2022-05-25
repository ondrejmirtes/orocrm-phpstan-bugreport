<?php return array (
  'contact-cases-grid' => 
  array (
    'extends' => 'base-case-grid',
    'filters' => 
    array (
      'columns' => 
      array (
        'relatedAccount' => 
        array (
          'label' => 'oro.case.datagrid.related_account.label',
          'type' => 'string',
          'data_name' => 'relatedAccountName',
          'renderable' => false,
        ),
      ),
    ),
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'relatedContact.id = :id',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'id',
      ),
    ),
  ),
);