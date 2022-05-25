<?php return array (
  'account-cases-grid' => 
  array (
    'extends' => 'base-case-grid',
    'filters' => 
    array (
      'columns' => 
      array (
        'relatedContact' => 
        array (
          'label' => 'oro.case.datagrid.related_contact.label',
          'type' => 'string',
          'data_name' => 'relatedContactName',
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
            0 => 'relatedAccount.id = :id',
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