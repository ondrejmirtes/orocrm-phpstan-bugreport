<?php return array (
  'oro-base-marketing-list-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingList',
    'features' => 
    array (
      'entity_class_name_path' => 'ml.entity',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'ml.id',
          1 => 'ml.name',
          2 => 'ml.entity',
          3 => 'type.label as listType',
          4 => 'ml.createdAt',
          5 => 'ml.lastRun',
          6 => 'segment.lastRun as segmentLastRun',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\MarketingListBundle\\Entity\\MarketingList',
            'alias' => 'ml',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'ml.type',
              'alias' => 'type',
            ),
          ),
          'left' => 
          array (
            0 => 
            array (
              'join' => 'ml.segment',
              'alias' => 'segment',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.marketinglist.name.label',
      ),
      'entity' => 
      array (
        'label' => 'oro.marketinglist.entity.label',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_marketing_list.entity_provider',
        ),
      ),
      'listType' => 
      array (
        'label' => 'oro.marketinglist.type.label',
        'type' => 'twig',
        'choices' => '@oro_marketing_list.datagrid.marketing_list_type.provider->getListTypeChoices',
        'frontend_type' => 'html',
        'template' => '@OroMarketingList/MarketingList/Datagrid/Property/listType.html.twig',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.marketinglist.created_at.label',
        'frontend_type' => 'datetime',
      ),
      'lastRun' => 
      array (
        'label' => 'oro.marketinglist.last_run.label',
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
          'data_name' => 'ml.name',
        ),
        'entity' => 
        array (
          'type' => 'choice',
          'data_name' => 'ml.entity',
          'options' => 
          array (
            'field_options' => 
            array (
              'multiple' => true,
              'choices' => '@oro_entity.datagrid_helper->getEntityNames',
              'translatable_options' => false,
            ),
          ),
        ),
        'listType' => 
        array (
          'type' => 'choice',
          'data_name' => 'ml.type',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_marketing_list.datagrid.marketing_list_type.provider->getListTypeChoices',
            ),
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ml.createdAt',
        ),
        'lastRun' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ml.lastRun',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'ml.name',
        ),
        'createdAt' => 
        array (
          'data_name' => 'ml.createdAt',
        ),
        'lastRun' => 
        array (
          'data_name' => 'ml.lastRun',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_marketing_list_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_marketing_list_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_marketinglist',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
  ),
);