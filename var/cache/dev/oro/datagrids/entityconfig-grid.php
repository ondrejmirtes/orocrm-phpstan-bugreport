<?php return array (
  'entityconfig-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.entity_config.entity.plural_label',
    ),
    'acl_resource' => 'oro_entityconfig_manage',
    'features' => 
    array (
      'entity_class_name_path' => 'ce.className',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'ce.id',
          1 => 'ce.updated',
          2 => 'ce.mode',
          3 => 'ce.data',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EntityConfigBundle\\Entity\\EntityConfigModel',
            'alias' => 'ce',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'ce.mode <> \'Oro\\Bundle\\EntityConfigBundle\\Entity\\ConfigModel::MODE_HIDDEN\'',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'updated' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_entityconfig_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_entityconfig_view',
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
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'updated' => 
        array (
          'data_name' => 'ce.updated',
        ),
      ),
      'disable_default_sorting' => true,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'updated' => 
        array (
          'type' => 'datetime',
          'data_name' => 'ce.updated',
        ),
      ),
    ),
  ),
);