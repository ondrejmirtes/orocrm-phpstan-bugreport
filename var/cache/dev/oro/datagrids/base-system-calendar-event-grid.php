<?php return array (
  'base-system-calendar-event-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'partial event.{ id, recurrence }',
          1 => 'event.title',
          2 => 'event.start',
          3 => 'event.end',
          4 => '(CASE WHEN (recurrence.id IS NULL) THEN false ELSE true END) as is_recurrent',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
            'alias' => 'event',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'event.systemCalendar',
              'alias' => 'calendar',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'event.recurrence',
              'alias' => 'recurrence',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'calendar.id = :calendarId',
            1 => 'event.cancelled = false',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'calendarId',
      ),
    ),
    'columns' => 
    array (
      'title' => 
      array (
        'label' => 'oro.calendar.calendarevent.title.label',
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
      'is_recurrent' => 
      array (
        'label' => 'oro.calendar.calendarevent.recurrence.alias.recurrent',
        'frontend_type' => 'boolean',
      ),
      'recurrence' => 
      array (
        'label' => 'oro.calendar.calendarevent.recurrence.label',
        'type' => 'twig',
        'template' => '@OroCalendar/CalendarEvent/Datagrid/Property/recurrence.html.twig',
        'frontend_type' => 'html',
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
        'is_recurrent' => 
        array (
          'type' => 'boolean',
          'data_name' => 'is_recurrent',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_system_calendar_event_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_system_calendar_event_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_calendar_event_delete',
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
        'acl_resource' => 'oro_calendar_event_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_calendar_event_create',
        'label' => 'Update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_calendar_event_delete',
        'label' => 'Delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.calendar.calendarevent.entity_plural_label',
      'entity_pagination' => true,
    ),
  ),
);