<?php return array (
  'base-cases-with-relations-grid' => 
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
        'relatedAccount' => 
        array (
          'label' => 'oro.case.datagrid.related_account.label',
          'type' => 'string',
          'data_name' => 'relatedAccountName',
          'renderable' => false,
        ),
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
  ),
);