<?php return array (
  'campaign-tracking-detailed-report-day-grid-precalculated' => 
  array (
    'extends' => 'campaign-tracking-detailed-report-day-grid-basic',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.name',
          1 => 'SUM(e.visitCount) as visitsCount',
          2 => 'DATE(e.loggedAt) as logTime',
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