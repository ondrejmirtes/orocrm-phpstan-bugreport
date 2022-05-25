<?php return array (
  'widget-calls-grid' => 
  array (
    'extends' => 'widget-base-calls-grid',
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
  ),
);