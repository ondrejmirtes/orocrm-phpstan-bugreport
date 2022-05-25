<?php return array (
  'campaign-tracking-total-report-grid' => 
  array (
    'extends' => 'campaign-tracking-total-report-grid-basic',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.name',
          1 => 'COUNT(e.id) as visitsCount',
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