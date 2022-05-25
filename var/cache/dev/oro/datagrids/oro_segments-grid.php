<?php return array (
  'oro_segments-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SegmentBundle\\Entity\\Segment',
    'acl_resource' => 'oro_segment_view',
    'features' => 
    array (
      'entity_class_name_path' => 's.entity',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 's.id',
          1 => 's.name',
          2 => 's.entity',
          3 => 's.lastRun',
          4 => 'type.label as segmentType',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SegmentBundle\\Entity\\Segment',
            'alias' => 's',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 's.type',
              'alias' => 'type',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_segment_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_segment_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'clone_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_segment_clone',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_segment',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.segment.name.label',
      ),
      'entity' => 
      array (
        'label' => 'oro.segment.entity.label',
        'type' => 'twig',
        'template' => '@OroEntity/Datagrid/Property/entity.html.twig',
        'frontend_type' => 'html',
        'context' => 
        array (
          'entity_provider' => '@oro_segment.entity_provider',
        ),
      ),
      'segmentType' => 
      array (
        'label' => 'oro.segment.type.label',
        'type' => 'translatable',
        'choices' => '@oro_segment.segment_manager->getSegmentTypeChoices',
      ),
      'lastRun' => 
      array (
        'label' => 'oro.segment.last_run.label',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 's.name',
        ),
        'lastRun' => 
        array (
          'data_name' => 's.lastRun',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 's.name',
        ),
        'entity' => 
        array (
          'type' => 'choice',
          'data_name' => 's.entity',
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
        'segmentType' => 
        array (
          'type' => 'choice',
          'data_name' => 's.type',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_segment.segment_manager->getSegmentTypeChoices',
            ),
          ),
        ),
        'lastRun' => 
        array (
          'type' => 'datetime',
          'data_name' => 's.lastRun',
          'renderable' => false,
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_segment_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_segment_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
      'clone' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_segment_create',
        'label' => 'oro.segment.action.clone.button.label',
        'icon' => 'files-o',
        'link' => 'clone_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_segment_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
        'launcherOptions' => 
        array (
          'className' => 'no-hash mobile-hide',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.segment.entity_plural_label',
    ),
  ),
);