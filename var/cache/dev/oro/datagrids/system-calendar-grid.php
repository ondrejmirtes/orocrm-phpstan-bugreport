<?php return array (
  'system-calendar-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'sc.id',
          1 => 'sc.name',
          2 => 'sc.public',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CalendarBundle\\Entity\\SystemCalendar',
            'alias' => 'sc',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.calendar.systemcalendar.name.label',
      ),
      'public' => 
      array (
        'label' => 'oro.calendar.systemcalendar.public.label',
        'frontend_type' => 'select',
        'choices' => 
        array (
          'oro.calendar.systemcalendar.scope.organization' => false,
          'oro.calendar.systemcalendar.scope.system' => true,
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'sc.name',
        ),
        'public' => 
        array (
          'data_name' => 'sc.public',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'sc.name',
        ),
        'public' => 
        array (
          'type' => 'boolean',
          'data_name' => 'sc.public',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'oro.calendar.systemcalendar.scope.organization' => 2,
                'oro.calendar.systemcalendar.scope.system' => 1,
              ),
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_system_calendar_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_system_calendar_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_systemcalendar',
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
        'label' => 'View',
        'link' => 'view_link',
        'icon' => 'eye',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'Update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'Delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'action_configuration' => '@oro_calendar.listener.datagrid.system_calendar->getActionConfigurationClosure',
  ),
);