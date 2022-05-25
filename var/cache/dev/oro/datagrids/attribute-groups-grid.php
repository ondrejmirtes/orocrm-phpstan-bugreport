<?php return array (
  'attribute-groups-grid' => 
  array (
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'attributeGroup.id',
          1 => 'attributeGroup.code',
          2 => 'attributeGroup.isVisible',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\EntityConfigBundle\\Attribute\\Entity\\AttributeGroup',
            'alias' => 'attributeGroup',
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'attributeGroup.attributeFamily = :family_id',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 'family_id',
      ),
    ),
    'columns' => 
    array (
      'groupLabel' => 
      array (
        'label' => 'oro.entity_config.attribute_group.labels.label',
      ),
      'code' => 
      array (
        'label' => 'oro.entity_config.attribute_group.code.label',
      ),
      'isVisible' => 
      array (
        'label' => 'oro.entity_config.attribute_group.is_visible.label',
        'frontend_type' => 'boolean',
      ),
      'attributes' => 
      array (
        'label' => 'oro.entity_config.attribute_group.attribute_relations.label',
        'renderable' => true,
        'type' => 'twig',
        'template' => '@OroEntityConfig/Datagrid/Property/attributes.html.twig',
        'frontend_type' => 'html',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'groupLabel' => 
      array (
        'type' => 'localized_value',
        'data_name' => 'labels',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'groupLabel' => 
        array (
          'data_name' => 'groupLabel',
        ),
        'code' => 
        array (
          'data_name' => 'code',
        ),
      ),
    ),
  ),
);