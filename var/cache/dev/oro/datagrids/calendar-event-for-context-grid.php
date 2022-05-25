<?php return array (
  'calendar-event-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
    'acl_resource' => 'oro_calendar_event_view',
    'options' => 
    array (
      'entityHint' => 'oro.calendar.calendarevent.entity_plural_label',
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
          0 => 'event.id',
          1 => 'CONCAT(CASE WHEN calendar.name IS NOT NULL THEN calendar.name ELSE CONCAT_WS(\' \', owner.firstName, owner.lastName) END, \'\') AS name',
          2 => 'event.title',
          3 => 'event.start',
          4 => 'event.end',
          5 => 'parent.id as parentId',
          6 => 'owner.id as ownerId',
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
          'left' => 
          array (
            0 => 
            array (
              'join' => 'event.parent',
              'alias' => 'parent',
            ),
          ),
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'event.calendar',
              'alias' => 'calendar',
            ),
            1 => 
            array (
              'join' => 'calendar.owner',
              'alias' => 'owner',
            ),
            2 => 
            array (
              'join' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarProperty',
              'alias' => 'connection',
              'conditionType' => 'WITH',
              'condition' => 'connection.calendarAlias = \'user\' AND connection.calendar = calendar.id AND connection.visible = true',
            ),
            3 => 
            array (
              'join' => 'connection.targetCalendar',
              'alias' => 'targetCalendar',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'targetCalendar.owner = @oro_security.token_accessor->getUserId',
          ),
        ),
        'groupBy' => 'event.id, calendar.name, owner.firstName, owner.lastName, parentId, ownerId',
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.calendar.calendarevent.id.label',
      ),
      'title' => 
      array (
        'label' => 'oro.calendar.calendarevent.title.label',
      ),
      'name' => 
      array (
        'label' => 'oro.calendar.calendarevent.calendar.label',
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
        'name' => 
        array (
          'data_name' => 'name',
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
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'name',
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