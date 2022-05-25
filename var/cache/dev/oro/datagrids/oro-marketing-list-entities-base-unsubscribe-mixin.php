<?php return array (
  'oro-marketing-list-entities-base-unsubscribe-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListUnsubscribedItem',
              'alias' => 'mlu',
              'conditionType' => 'WITH',
              'condition' => 'mlu.entityId = __root_entity__.id AND mlu.marketingList = :marketingListEntity',
            ),
            1 => 
            array (
              'join' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingListRemovedItem',
              'alias' => 'mlr',
              'conditionType' => 'WITH',
              'condition' => 'mlr.entityId = __root_entity__.id AND mlr.marketingList = :marketingListEntity',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'mlr.id IS NULL',
            1 => 'mlu.id IS NULL',
          ),
        ),
      ),
    ),
  ),
);