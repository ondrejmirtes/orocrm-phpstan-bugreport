<?php return array (
  'campaign-tracking-detailed-report-day-grid' => 
  array (
    'extends' => 'campaign-tracking-detailed-report-day-grid-basic',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.name',
          1 => 'COUNT(e.id) as visitsCount',
          2 => 'DATE(e.loggedAt) as logTime',
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
  ),
);