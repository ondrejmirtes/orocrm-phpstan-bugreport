<?php return array (
  'base-entityfields-grid' => 
  array (
    'options' => 
    array (
      'mode' => 'client',
      'entityHint' => 'oro.entity_config.field_config.entity_plural_label',
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 50,
        ),
      ),
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'cf.id',
          1 => 'ce.className',
          2 => 'cf.fieldName',
          3 => 'cf.type',
          4 => 'cf.mode',
          5 => 'ce.id as entity_id',
          6 => 'cf.data',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EntityConfigBundle\\Entity\\FieldConfigModel',
            'alias' => 'cf',
          ),
        ),
        'join' => 
        array (
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'cf.entity',
              'alias' => 'ce',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'ce.id = :entity_id',
            1 => 'cf.mode <> \'Oro\\Bundle\\EntityConfigBundle\\Entity\\ConfigModel::MODE_HIDDEN\'',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'fieldName' => 
      array (
        'label' => 'oro.entity_config.field_config.field_name.label',
        'frontend_type' => 'string',
      ),
      'type' => 
      array (
        'label' => 'oro.entity_config.field_config.type.label',
        'frontend_type' => 'html',
        'type' => 'twig',
        'template' => '@OroEntityConfig/Config/fieldType.html.twig',
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'rowAction' => true,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'fieldName' => 
        array (
          'data_name' => 'cf.fieldName',
        ),
        'type' => 
        array (
          'data_name' => 'cf.type',
        ),
      ),
      'default' => 
      array (
        'fieldName' => 'ASC',
      ),
    ),
    'filters' => NULL,
  ),
);