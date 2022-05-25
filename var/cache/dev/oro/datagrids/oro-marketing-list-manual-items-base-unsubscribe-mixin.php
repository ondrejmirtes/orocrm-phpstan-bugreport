<?php return array (
  'oro-marketing-list-manual-items-base-unsubscribe-mixin' => 
  array (
    'extends' => 'oro-marketing-list-manual-items-base-mixin',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '(CASE WHEN mlu.id IS NULL THEN true ELSE false END) as subscribed',
        ),
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
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'subscribed' => 
      array (
        'label' => 'oro.marketinglist.datagrid.subscribed',
        'frontend_type' => 'boolean',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'subscribed' => 
        array (
          'type' => 'boolean',
          'data_name' => 'subscribed',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'subscribed' => 
        array (
          'data_name' => 'subscribed',
        ),
      ),
    ),
    'properties' => 
    array (
      'subscribe_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_subscribe_marketinglist_unsubscribeditem',
        'params' => 
        array (
          0 => 'marketingList',
          1 => 'id',
        ),
      ),
      'unsubscribe_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_unsubscribe_marketinglist_unsubscribeditem',
        'params' => 
        array (
          0 => 'marketingList',
          1 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'subscribe' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.marketinglist.action.subscribe',
        'link' => 'subscribe_link',
        'icon' => 'plus',
        'acl_resource' => 'oro_marketinglist_unsubscribed_item_delete',
      ),
      'unsubscribe' => 
      array (
        'type' => 'ajax',
        'label' => 'oro.marketinglist.action.unsubscribe',
        'link' => 'unsubscribe_link',
        'icon' => 'minus',
        'acl_resource' => 'oro_marketinglist_unsubscribed_item_create',
      ),
    ),
  ),
);