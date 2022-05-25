<?php return array (
  'campaign-tracking-total-report-grid-precalculated' => 
  array (
    'extends' => 'campaign-tracking-total-report-grid-basic',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'e.name',
          1 => 'SUM(e.visitCount) as visitsCount',
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