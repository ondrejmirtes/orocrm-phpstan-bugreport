<?php return array (
  'oro-marketing-full-mixin' => 
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