<?php return array (
  'custom-entity-grid' => 
  array (
    'acl_resource' => NULL,
    'options' => 
    array (
      'base_datagrid_class' => 'Oro\\Bundle\\EntityBundle\\Grid\\CustomEntityDatagrid',
      'entityHint' => 'oro.entity.plural_label',
      'export' => true,
      'entity_pagination' => true,
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'ce.id',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'ENTITY_NAME',
            'alias' => 'ce',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'renderable' => false,
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'callback',
        'callable' => '@oro_entity.event_listener.custom_entity_grid_listener->getLinkProperty',
        'route' => 'oro_entity_update',
      ),
      'view_link' => 
      array (
        'type' => 'callback',
        'callable' => '@oro_entity.event_listener.custom_entity_grid_listener->getLinkProperty',
        'route' => 'oro_entity_view',
      ),
      'delete_link' => 
      array (
        'type' => 'callback',
        'callable' => '@oro_entity.event_listener.custom_entity_grid_listener->getLinkProperty',
        'route' => 'oro_entity_delete',
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'ce.id',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
      ),
    ),
  ),
);