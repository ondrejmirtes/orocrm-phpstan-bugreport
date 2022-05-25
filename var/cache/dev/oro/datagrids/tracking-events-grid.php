<?php return array (
  'tracking-events-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\TrackingBundle\\Entity\\TrackingEvent',
    'acl_resource' => 'oro_tracking_website_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.id',
          1 => 'e.name',
          2 => 'e.value',
          3 => 'e.userIdentifier',
          4 => 'e.url',
          5 => 'e.title',
          6 => 'e.code',
          7 => 'e.loggedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TrackingBundle\\Entity\\TrackingEvent',
            'alias' => 'e',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.tracking.trackingevent.id.label',
        'renderable' => false,
      ),
      'name' => 
      array (
        'label' => 'oro.tracking.trackingevent.name.label',
      ),
      'value' => 
      array (
        'label' => 'oro.tracking.trackingevent.value.label',
      ),
      'userIdentifier' => 
      array (
        'label' => 'oro.tracking.trackingevent.userIdentifier.label',
      ),
      'url' => 
      array (
        'type' => 'twig',
        'label' => 'oro.tracking.trackingevent.url.label',
        'frontend_type' => 'html',
        'template' => '@OroTracking/TrackingEvent/Property/url.html.twig',
      ),
      'code' => 
      array (
        'label' => 'oro.tracking.trackingevent.code.label',
      ),
      'loggedAt' => 
      array (
        'label' => 'oro.tracking.trackingevent.logged_at.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'e.id',
        ),
        'name' => 
        array (
          'data_name' => 'e.name',
        ),
        'value' => 
        array (
          'data_name' => 'e.value',
        ),
        'userIdentifier' => 
        array (
          'data_name' => 'e.userIdentifier',
        ),
        'code' => 
        array (
          'data_name' => 'e.code',
        ),
        'loggedAt' => 
        array (
          'data_name' => 'e.loggedAt',
        ),
      ),
      'default' => 
      array (
        'id' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'e.name',
        ),
        'value' => 
        array (
          'type' => 'string',
          'data_name' => 'e.value',
        ),
        'userIdentifier' => 
        array (
          'type' => 'string',
          'data_name' => 'e.userIdentifier',
        ),
        'code' => 
        array (
          'type' => 'string',
          'data_name' => 'e.code',
        ),
        'loggedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'e.loggedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
  ),
);