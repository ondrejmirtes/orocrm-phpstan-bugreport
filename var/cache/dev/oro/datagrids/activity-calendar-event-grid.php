<?php return array (
  'activity-calendar-event-grid' => 
  array (
    'extends' => 'widget-base-calendar-event-grid',
    'filters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'type' => 'string',
          'data_name' => 'event.title',
        ),
        'start' => 
        array (
          'type' => 'datetime',
          'data_name' => 'event.start',
        ),
        'end' => 
        array (
          'type' => 'datetime',
          'data_name' => 'event.end',
        ),
      ),
    ),
  ),
);