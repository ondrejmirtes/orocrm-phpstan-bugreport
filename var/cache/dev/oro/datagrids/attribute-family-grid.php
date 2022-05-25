<?php return array (
  'attribute-family-grid' => 
  array (
    'acl_resource' => 'oro_attribute_family_manage',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'attributeFamily.id',
          1 => 'attributeFamily.code',
          2 => 'attributeFamily.entityClass',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EntityConfigBundle\\Attribute\\Entity\\AttributeFamily',
            'alias' => 'attributeFamily',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'attributeFamily.entityClass = :entity_class',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'entity_class',
      ),
    ),
    'columns' => 
    array (
      'code' => 
      array (
        'label' => 'oro.entity_config.attribute_family.code.label',
      ),
      'familyLabel' => 
      array (
        'label' => 'oro.entity_config.attribute_family.labels.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'familyLabel' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'labels',
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_attribute_family_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_attribute_family_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_attribute_family_delete',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'code' => 
        array (
          'data_name' => 'attributeFamily.code',
        ),
        'familyLabel' => 
        array (
          'data_name' => 'familyLabel',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'code' => 
        array (
          'type' => 'string',
          'data_name' => 'attributeFamily.code',
        ),
        'familyLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'familyLabel',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'acl_resource' => 'oro_attribute_family_view',
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'acl_resource' => 'oro_attribute_family_update',
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'edit',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'acl_resource' => 'oro_attribute_family_delete',
        'type' => 'ajaxdelete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash',
        'rowAction' => true,
      ),
    ),
    'action_configuration' => 
    array (
      0 => '@oro_entity_config.datagrid.attribute_family_actions_configuration',
      1 => 'configureActionsVisibility',
    ),
  ),
);