<?php return array (
  'system-calendar-event-grid' => 
  array (
    'extends' => 'base-system-calendar-event-grid',
    'source' => 
    array (
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'calendar.public = false',
          ),
        ),
      ),
    ),
    'action_configuration' => '@oro_calendar.system_calendar_event.datagrid_helper->getSystemActionConfigurationClosure',
  ),
);