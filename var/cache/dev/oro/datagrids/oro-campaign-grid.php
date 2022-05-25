<?php return array (
  'oro-campaign-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
    'acl_resource' => 'oro_campaign_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.name',
          2 => 'c.code',
          3 => 'c.startDate',
          4 => 'c.endDate',
          5 => 'c.budget',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
            'alias' => 'c',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.campaign.name.label',
      ),
      'code' => 
      array (
        'label' => 'oro.campaign.code.label',
      ),
      'startDate' => 
      array (
        'label' => 'oro.campaign.start_date.label',
        'frontend_type' => 'date',
      ),
      'endDate' => 
      array (
        'label' => 'oro.campaign.end_date.label',
        'frontend_type' => 'date',
      ),
      'budget' => 
      array (
        'label' => 'oro.campaign.budget.label',
        'frontend_type' => 'currency',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'c.name',
        ),
        'code' => 
        array (
          'type' => 'string',
          'data_name' => 'c.code',
        ),
        'startDate' => 
        array (
          'type' => 'date',
          'data_name' => 'c.startDate',
        ),
        'endDate' => 
        array (
          'type' => 'date',
          'data_name' => 'c.endDate',
        ),
        'budget' => 
        array (
          'type' => 'currency',
          'data_name' => 'c.budget',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'c.name',
        ),
        'code' => 
        array (
          'data_name' => 'c.code',
        ),
        'startDate' => 
        array (
          'data_name' => 'c.startDate',
        ),
        'endDate' => 
        array (
          'data_name' => 'c.endDate',
        ),
        'budget' => 
        array (
          'data_name' => 'c.budget',
        ),
      ),
      'default' => 
      array (
        'startDate' => 'DESC',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_campaign_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_campaign_update',
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
        'acl_resource' => 'oro_campaign_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_campaign_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
    ),
    'mass_actions' => 
    array (
      'merge' => 
      array (
        'type' => 'merge',
        'entity_name' => 'Oro\\Bundle\\CampaignBundle\\Entity\\Campaign',
        'data_identifier' => 'c.id',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
  ),
);