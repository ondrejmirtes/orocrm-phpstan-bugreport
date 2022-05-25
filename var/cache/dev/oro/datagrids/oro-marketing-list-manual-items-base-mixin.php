<?php return array (
  'oro-marketing-list-manual-items-base-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '__root_entity__.id',
          1 => 'mli.contactedTimes',
          2 => 'mli.lastContactedAt',
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
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListRemovedItem',
              'alias' => 'mlr',
              'conditionType' => 'WITH',
              'condition' => 'mlr.entityId = __root_entity__.id AND mlr.marketingList = :marketingListEntity',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'contactedTimes' => 
      array (
        'label' => 'oro.marketinglist.datagrid.contactedTimes',
      ),
      'lastContactedAt' => 
      array (
        'label' => 'oro.marketinglist.datagrid.lastContactedAt',
        'frontend_type' => 'datetime',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'contactedTimes' => 
        array (
          'type' => 'number-range',
          'data_name' => 'mli.contactedTimes',
        ),
        'lastContactedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'mli.lastContactedAt',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'contactedTimes' => 
        array (
          'data_name' => 'mli.contactedTimes',
        ),
        'lastContactedAt' => 
        array (
          'data_name' => 'mli.lastContactedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'marketingList' => NULL,
    ),
    'action_configuration' => 
    array (
      0 => '@oro_marketing_list.datagrid.action_permission_provider',
      1 => 'getMarketingListItemPermissions',
    ),
    'options' => 
    array (
      'skip_count_walker' => true,
      'mixin' => true,
    ),
  ),
);