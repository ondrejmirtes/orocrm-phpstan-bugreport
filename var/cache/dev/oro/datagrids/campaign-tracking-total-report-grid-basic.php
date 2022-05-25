<?php return array (
  'campaign-tracking-total-report-grid-basic' => 
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
        'groupBy' => 'e.name',
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
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'e.name',
        ),
        'visitsCount' => 
        array (
          'data_name' => 'visitsCount',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
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
        'visitsCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'visitsCount',
          'filter_by_having' => true,
          'options' => 
          array (
            'data_type' => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType::DATA_INTEGER',
          ),
        ),
      ),
    ),
    'options' => 
    array (
      'export' => true,
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