<?php return array (
  'calendar-event-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
    'acl_resource' => 'oro_calendar_event_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'partial event.{ id, start, recurrence, cancelled }',
          1 => 'event.id',
          2 => 'COALESCE(calendar.name, CONCAT_WS(\' \', owner.firstName, owner.lastName)) AS name',
          3 => 'event.title',
          4 => 'event.start',
          5 => 'event.end',
          6 => 'parent.id as parentId',
          7 => 'owner.id as ownerId',
          8 => 'relatedAttendeeUser.id as relatedAttendeeUserId',
          9 => '(CASE WHEN (event.recurrence IS NOT NULL OR parent.recurrence IS NOT NULL) THEN true ELSE false END) as is_recurrent',
          10 => 'recurringEvent',
          11 => 'recurringEventRecurrence',
          12 => 'parent',
          13 => 'parentRecurringEvent',
          14 => 'parentRecurringEventRecurrence',
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
            1 => 
            array (
              'join' => 'event.relatedAttendee',
              'alias' => 'ra',
            ),
            2 => 
            array (
              'join' => 'ra.status',
              'alias' => 'status',
            ),
            3 => 
            array (
              'join' => 'ra.user',
              'alias' => 'relatedAttendeeUser',
            ),
            4 => 
            array (
              'join' => 'event.recurrence',
              'alias' => 'recurrence',
            ),
            5 => 
            array (
              'join' => 'event.recurringEvent',
              'alias' => 'recurringEvent',
            ),
            6 => 
            array (
              'join' => 'recurringEvent.recurrence',
              'alias' => 'recurringEventRecurrence',
            ),
            7 => 
            array (
              'join' => 'parent.recurringEvent',
              'alias' => 'parentRecurringEvent',
            ),
            8 => 
            array (
              'join' => 'parentRecurringEvent.recurrence',
              'alias' => 'parentRecurringEventRecurrence',
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
            1 => 'event.cancelled = false',
            2 => 'event.recurringEvent is null',
          ),
        ),
        'groupBy' => 'event.id, calendar.name, owner.firstName, owner.lastName, parent.id, owner.id, status.id, relatedAttendeeUser.id, recurrence.id, recurringEvent.id, recurringEventRecurrence.id, parentRecurringEvent.id, parentRecurringEventRecurrence.id
',
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'columns' => 
    array (
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
        'route' => 'oro_calendar_event_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_calendar_event_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'callback',
        'callable' => '@oro_calendar.datagrid.helper.calendar_event_grid->getDeleteLinkProperty',
        'route' => 'oro_calendar_event_delete',
      ),
      'accept_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_calendar_event_accepted',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'tentative_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_calendar_event_tentative',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'decline_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_calendar_event_declined',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'accept' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.calendar.calendarevent.action.status.accepted.label',
        'link' => 'accept_link',
        'icon' => 'check',
        'acl_resource' => 'oro_calendar_event_view',
      ),
      'tentative' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.calendar.calendarevent.action.status.tentative.label',
        'link' => 'tentative_link',
        'icon' => 'question',
        'acl_resource' => 'oro_calendar_event_view',
      ),
      'decline' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.calendar.calendarevent.action.status.declined.label',
        'link' => 'decline_link',
        'icon' => 'close',
        'acl_resource' => 'oro_calendar_event_view',
      ),
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_calendar_event_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_calendar_event_create',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_calendar_event_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_calendar.datagrid.action_permission_provider',
      1 => 'getInvitationPermissions',
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'type' => 'delete',
        'icon' => 'trash',
        'label' => 'oro.grid.action.delete',
        'entity_name' => 'Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent',
        'data_identifier' => 'event.id',
        'handler' => 'oro_calendar.datagrid.mass_action.handler.delete',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.calendar.calendarevent.entity_plural_label',
      'entity_pagination' => true,
    ),
  ),
);