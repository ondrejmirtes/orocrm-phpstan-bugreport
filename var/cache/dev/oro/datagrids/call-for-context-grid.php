<?php return array (
  'call-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
    'acl_resource' => 'oro_call_view',
    'options' => 
    array (
      'entityHint' => 'oro.call.entity_plural_label',
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
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'call.id',
          1 => 'call.subject',
          2 => 'CONCAT(call.phoneNumber, \'\') as phone',
          3 => 'call.callDateTime as dateTime',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
            'alias' => 'call',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.call.id.label',
      ),
      'subject' => 
      array (
        'label' => 'oro.call.subject.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.call.phone_number.label',
      ),
      'dateTime' => 
      array (
        'label' => 'oro.call.call_date_time.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'type' => 'string',
          'data_name' => 'call.subject',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone',
        ),
        'dateTime' => 
        array (
          'type' => 'datetime',
          'data_name' => 'call.callDateTime',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subject' => 
        array (
          'data_name' => 'call.subject',
        ),
        'phone' => 
        array (
          'data_name' => 'phone',
        ),
        'dateTime' => 
        array (
          'data_name' => 'call.callDateTime',
        ),
      ),
      'default' => 
      array (
        'dateTime' => 'DESC',
      ),
    ),
  ),
);