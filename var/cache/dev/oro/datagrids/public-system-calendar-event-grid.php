<?php return array (
  'public-system-calendar-event-grid' => 
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
            0 => 'calendar.public = true',
          ),
        ),
      ),
    ),
    'action_configuration' => '@oro_calendar.system_calendar_event.datagrid_helper->getPublicActionConfigurationClosure',
  ),
);