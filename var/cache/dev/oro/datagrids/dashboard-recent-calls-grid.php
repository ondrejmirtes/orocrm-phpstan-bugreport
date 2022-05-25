<?php return array (
  'dashboard-recent-calls-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.call.entity_plural_label',
      'toolbarOptions' => 
      array (
        'addDatagridSettingsManager' => false,
        'hide' => true,
        'pageSize' => 
        array (
          'items' => 
          array (
            0 => 10,
          ),
          'default_per_page' => 10,
        ),
      ),
    ),
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
          4 => 'directionType.name as callDirection',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CallBundle\\Entity\\Call',
            'alias' => 'call',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'call.direction',
              'alias' => 'directionType',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'callDirection' => 
      array (
        'type' => 'twig',
        'label' => NULL,
        'frontend_type' => 'html',
        'template' => '@OroCall/Datagrid/Column/direction.html.twig',
      ),
      'dateTime' => 
      array (
        'label' => 'oro.call.datagrid.date_time',
        'frontend_type' => 'datetime',
      ),
      'subject' => 
      array (
        'type' => 'twig',
        'label' => 'oro.call.subject.label',
        'frontend_type' => 'html',
        'template' => '@OroCall/Datagrid/Column/subject.html.twig',
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