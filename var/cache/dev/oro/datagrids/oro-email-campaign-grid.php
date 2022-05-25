<?php return array (
  'oro-email-campaign-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
    'acl_resource' => 'oro_email_campaign_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'ec.id',
          1 => 'ec.sent',
          2 => 'ec.sentAt',
          3 => 'ec.name',
          4 => 'ec.senderEmail',
          5 => 'ec.senderName',
          6 => 'ec.schedule',
          7 => 'ec.scheduledFor',
          8 => 'ec.createdAt',
          9 => 'ec.updatedAt',
          10 => 'c.name as campaignName',
          11 => 'ml.name as marktingListName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign',
            'alias' => 'ec',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'ec.campaign',
              'alias' => 'c',
            ),
            1 => 
            array (
              'join' => 'ec.marketingList',
              'alias' => 'ml',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.campaign.emailcampaign.name.label',
      ),
      'senderEmail' => 
      array (
        'label' => 'oro.campaign.emailcampaign.sender_email.label',
        'cellClassName' => 'direction-ltr',
      ),
      'senderName' => 
      array (
        'label' => 'oro.campaign.emailcampaign.sender_name.label',
      ),
      'campaignName' => 
      array (
        'label' => 'oro.campaign.emailcampaign.campaign.label',
      ),
      'marktingListName' => 
      array (
        'label' => 'oro.campaign.emailcampaign.marketing_list.label',
      ),
      'schedule' => 
      array (
        'label' => 'oro.campaign.emailcampaign.schedule.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroCampaign/EmailCampaign/Property/schedule.html.twig',
      ),
      'scheduledFor' => 
      array (
        'label' => 'oro.campaign.emailcampaign.scheduled_for.label',
        'frontend_type' => 'datetime',
      ),
      'sent' => 
      array (
        'label' => 'oro.campaign.emailcampaign.sent.label',
        'frontend_type' => 'boolean',
      ),
      'sentAt' => 
      array (
        'label' => 'oro.campaign.emailcampaign.sent_at.label',
        'frontend_type' => 'datetime',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.campaign.emailcampaign.created_at.label',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.campaign.emailcampaign.updated_at.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'ec.name',
        ),
        'senderEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'ec.senderEmail',
        ),
        'senderName' => 
        array (
          'type' => 'string',
          'data_name' => 'ec.senderName',
        ),
        'campaignName' => 
        array (
          'type' => 'string',
          'data_name' => 'c.name',
        ),
        'marktingListName' => 
        array (
          'type' => 'string',
          'data_name' => 'ml.name',
        ),
        'schedule' => 
        array (
          'type' => 'choice',
          'data_name' => 'ec.schedule',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => 
              array (
                'Manual' => 'manual',
                'Deferred' => 'deferred',
              ),
            ),
          ),
        ),
        'scheduledFor' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ec.scheduledFor',
        ),
        'sent' => 
        array (
          'type' => 'boolean',
          'data_name' => 'ec.sent',
        ),
        'sentAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ec.sentAt',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ec.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ec.updatedAt',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'ec.name',
        ),
        'senderEmail' => 
        array (
          'data_name' => 'ec.senderEmail',
        ),
        'senderName' => 
        array (
          'data_name' => 'ec.senderName',
        ),
        'campaignName' => 
        array (
          'data_name' => 'c.name',
        ),
        'marktingListName' => 
        array (
          'data_name' => 'ml.name',
        ),
        'schedule' => 
        array (
          'data_name' => 'ec.schedule',
        ),
        'sent' => 
        array (
          'data_name' => 'ec.sent',
        ),
        'sentAt' => 
        array (
          'data_name' => 'ec.sentAt',
        ),
        'scheduledFor' => 
        array (
          'data_name' => 'ec.scheduledFor',
        ),
        'createdAt' => 
        array (
          'data_name' => 'ec.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'ec.updatedAt',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_campaign_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_email_campaign_update',
        'params' => 
        array (
          0 => 'id',
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
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_email_campaign_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
  ),
);