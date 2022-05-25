<?php return array (
  'email-for-context-grid' => 
  array (
    'extends' => 'email-grid',
    'options' => 
    array (
      'entityHint' => 'oro.email.entity_plural_label',
      'entity_pagination' => true,
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
      'routerEnabled' => false,
    ),
    'properties' => 
    array (
      'id' => 
      array (
        'data_name' => 'emailId',
      ),
    ),
  ),
);