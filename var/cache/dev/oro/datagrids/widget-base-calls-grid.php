<?php return array (
  'widget-base-calls-grid' => 
  array (
    'acl_resource' => 'oro_call_view',
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
      'dateTime' => 
      array (
        'label' => 'oro.call.call_date_time.label',
        'frontend_type' => 'datetime',
      ),
      'subject' => 
      array (
        'label' => 'oro.call.subject.label',
        'type' => 'twig',
        'template' => '@OroCall/Datagrid/Column/subject.html.twig',
        'frontend_type' => 'html',
      ),
      'phone' => 
      array (
        'label' => 'oro.call.phone_number.label',
        'frontend_type' => 'phone',
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
    'properties' => 
    array (
      'id' => NULL,
    ),
    'options' => 
    array (
      'entityHint' => 'oro.call.entity_plural_label',
    ),
  ),
);