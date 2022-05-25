<?php return array (
  'campaign-tracking-detailed-report-month-grid-precalculated' => 
  array (
    'extends' => 'campaign-tracking-detailed-report-month-grid-basic',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.name',
          1 => 'SUM(e.visitCount) as visitsCount',
          2 => 'YEAR(e.loggedAt) as yearLoggedAt',
          3 => 'MONTH(e.loggedAt) as monthLoggedAt',
          4 => 'DATE(CONCAT(YEAR(e.loggedAt), \'-\', MONTH(e.loggedAt), \'-01\')) as logTime',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CampaignBundle\\Entity\\TrackingEventSummary',
            'alias' => 'e',
          ),
        ),
      ),
    ),
  ),
);