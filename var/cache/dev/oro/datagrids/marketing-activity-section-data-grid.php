<?php return array (
  'marketing-activity-section-data-grid' => 
  array (
    'acl_resource' => 'oro_campaign_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'emailCampaign.id as emailCampaignId',
          1 => 'emailCampaign.name as emailCampaignName',
          2 => 'ma.actionDate as eventDate',
          3 => 'eventType.id as eventTypeId',
          4 => 'eventType.name as eventTypeName',
          5 => 'ma.details',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\MarketingActivityBundle\\Entity\\MarketingActivity',
            'alias' => 'ma',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'ma.type',
              'alias' => 'eventType',
            ),
            1 => 
            array (
              'join' => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
              'alias' => 'emailCampaign',
              'conditionType' => 'WITH',
              'condition' => 'emailCampaign.id = ma.relatedCampaignId AND ma.relatedCampaignClass = \'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign\'',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'ma.campaign = :id',
            1 => 'ma.entityClass = :entityClass',
            2 => 'ma.entityId = :entityId',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'id',
        1 => 'entityClass',
        2 => 'entityId',
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'columns' => 
    array (
      'emailCampaignName' => 
      array (
        'label' => 'oro.marketingactivity.email_campaign.label',
        'cellClassName' => 'direction-ltr',
      ),
      'eventTypeName' => 
      array (
        'label' => 'oro.marketingactivity.event_type.label',
      ),
      'eventDate' => 
      array (
        'label' => 'oro.marketingactivity.event_date.label',
        'frontend_type' => 'datetime',
      ),
      'details' => 
      array (
        'label' => 'oro.marketingactivity.details.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'emailCampaignName' => 
        array (
          'data_name' => 'emailCampaign.name',
        ),
        'eventTypeName' => 
        array (
          'data_name' => 'eventTypeName',
        ),
        'eventDate' => 
        array (
          'data_name' => 'ma.actionDate',
        ),
        'details' => 
        array (
          'data_name' => 'ma.details',
        ),
      ),
      'default' => 
      array (
        'eventDate' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'emailCampaignName' => 
        array (
          'type' => 'string',
          'data_name' => 'emailCampaign.name',
        ),
        'eventTypeName' => 
        array (
          'type' => 'enum',
          'data_name' => 'eventTypeId',
          'enum_code' => 'ma_type',
        ),
        'eventDate' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ma.actionDate',
        ),
        'details' => 
        array (
          'type' => 'string',
          'data_name' => 'ma.details',
        ),
      ),
    ),
    'properties' => 
    array (
      'emailCampaignId' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_campaign_view',
        'params' => 
        array (
          'id' => 'emailCampaignId',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_email_campaign_view',
        'rowAction' => true,
      ),
    ),
  ),
);