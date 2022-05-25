<?php return array (
  'oro-email-campaign-marketing-list-sent-items-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'cs.openCount as openCount',
          1 => 'cs.clickCount as clickCount',
          2 => 'cs.bounceCount as bounceCount',
          3 => 'cs.abuseCount as abuseCount',
          4 => 'cs.unsubscribeCount as unsubscribeCount',
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListItem',
              'alias' => 'mli',
              'conditionType' => 'WITH',
              'condition' => 'mli.entityId = __root_entity__.id AND mli.marketingList = :marketingListEntity',
            ),
            1 => 
            array (
              'join' => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaignStatistics',
              'alias' => 'cs',
              'conditionType' => 'WITH',
              'condition' => 'cs.marketingListItem = mli.id AND cs.emailCampaign = :emailCampaign',
            ),
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'emailCampaign',
      ),
    ),
    'columns' => 
    array (
      'openCount' => 
      array (
        'label' => 'oro.campaign.emailcampaign.stats.open.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/stats.html.twig',
      ),
      'clickCount' => 
      array (
        'label' => 'oro.campaign.emailcampaign.stats.click.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/stats.html.twig',
      ),
      'bounceCount' => 
      array (
        'label' => 'oro.campaign.emailcampaign.stats.bounce.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/stats.html.twig',
      ),
      'abuseCount' => 
      array (
        'label' => 'oro.campaign.emailcampaign.stats.abuse.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/stats.html.twig',
      ),
      'unsubscribeCount' => 
      array (
        'label' => 'oro.campaign.emailcampaign.stats.unsubscribe.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/stats.html.twig',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'openCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cs.openCount',
        ),
        'clickCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cs.clickCount',
        ),
        'bounceCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cs.bounceCount',
        ),
        'abuseCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cs.abuseCount',
        ),
        'unsubscribeCount' => 
        array (
          'type' => 'number-range',
          'data_name' => 'cs.unsubscribeCount',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'openCount' => 
        array (
          'data_name' => 'cs.openCount',
        ),
        'clickCount' => 
        array (
          'data_name' => 'cs.clickCount',
        ),
        'bounceCount' => 
        array (
          'data_name' => 'cs.bounceCount',
        ),
        'abuseCount' => 
        array (
          'data_name' => 'cs.abuseCount',
        ),
        'unsubscribeCount' => 
        array (
          'data_name' => 'cs.unsubscribeCount',
        ),
      ),
    ),
    'options' => 
    array (
      'add_contacted_items' => true,
    ),
  ),
);