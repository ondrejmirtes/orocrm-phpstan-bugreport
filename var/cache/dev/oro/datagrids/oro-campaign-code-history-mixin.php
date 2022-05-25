<?php return array (
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