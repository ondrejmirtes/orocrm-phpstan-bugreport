<?php return array (
  'attributes-grid' => 
  array (
    'extends' => 'base-entityfields-grid',
    'acl_resource' => 'oro_attributes_manage',
    'options' => 
    array (
      'entityHint' => 'oro.entity_config.attribute.entity_plural_label',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'where' => 
        array (
          'and' => 
          array (
            0 => 'cfv_attribute_is_attribute.value = \'1\'',
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_attribute_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'columns' => 
    array (
      'attributeFamilies' => 
      array (
        'label' => 'oro.entity_config.attribute_family.entity_plural_label',
        'frontend_type' => 'html',
        'type' => 'twig',
        'template' => '@OroEntityConfig/Datagrid/Column/attributeFamilies.html.twig',
        'order' => 99,
      ),
      'organization_applicable' => 
      array (
        'renderable' => false,
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'acl_resource' => 'oro_attribute_update',
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
        'rowAction' => true,
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'type' => 
        array (
          'type' => 'choice',
          'data_name' => 'cf.type',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_entity_extend.type.field->getTranslatedTypeChoices',
              'multiple' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);