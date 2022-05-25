<?php return array (
  'campaign-tracking-detailed-report-day-grid-basic' => 
  array (
    'mixins' => 
    array (
      0 => 'oro-campaign-code-history-mixin',
    ),
    'acl_resource' => 'oro_campaign_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'groupBy' => 'e.name, logTime',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.tracking.trackingevent.name.label',
      ),
      'visitsCount' => 
      array (
        'label' => 'oro.campaign.trackingevent.report.visits_count.label',
        'frontend_type' => 'integer',
      ),
      'logTime' => 
      array (
        'label' => 'oro.campaign.trackingevent.report.date.label',
        'frontend_type' => 'date',
      ),
    ),
  ),
  'oro-campaign-code-history-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\CampaignBundle\\Entity\\CampaignCodeHistory',
              'alias' => 'cch',
              'conditionType' => 'WITH',
              'condition' => 'e.code = cch.code',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'cch.campaign = :campaign',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'campaign',
      ),
    ),
  ),
);