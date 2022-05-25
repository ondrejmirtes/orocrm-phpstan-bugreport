<?php return array (
  'oro-marketing-list-manual-entities-mixin' => 
  array (
    'extends' => 'oro-marketing-list-entities-base-unsubscribe-mixin',
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
              'join' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListItem',
              'alias' => 'mli',
              'conditionType' => 'WITH',
              'condition' => 'mli.entityId = __root_entity__.id AND mli.marketingList = :marketingListEntity',
            ),
          ),
        ),
      ),
    ),
    'options' => 
    array (
      'export' => false,
      'skip_count_walker' => true,
      'mixin' => true,
    ),
  ),
);