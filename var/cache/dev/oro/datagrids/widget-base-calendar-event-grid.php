<?php return array (
  'widget-base-calendar-event-grid' => 
  array (
    'acl_resource' => 'oro_calendar_event_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'event.id',
          1 => 'event.title',
          2 => 'event.start',
          3 => 'event.end',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
            'alias' => 'event',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'title' => 
      array (
        'label' => 'oro.calendar.calendarevent.title.label',
        'type' => 'twig',
        'template' => '@OroCalendar/CalendarEvent/Datagrid/Property/title.html.twig',
        'frontend_type' => 'html',
      ),
      'start' => 
      array (
        'label' => 'oro.calendar.calendarevent.start.label',
        'frontend_type' => 'datetime',
      ),
      'end' => 
      array (
        'label' => 'oro.calendar.calendarevent.end.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'title' => 
        array (
          'data_name' => 'event.title',
        ),
        'start' => 
        array (
          'data_name' => 'event.start',
        ),
        'end' => 
        array (
          'data_name' => 'event.end',
        ),
      ),
      'default' => 
      array (
        'start' => 'ASC',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'options' => 
    array (
      'entityHint' => 'oro.calendar.calendarevent.entity_plural_label',
    ),
  ),
);