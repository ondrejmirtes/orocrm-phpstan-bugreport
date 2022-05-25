<?php return array (
  'tag-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.tag.entity_plural_label',
      'entity_pagination' => true,
    ),
    'extended_entity_name' => 'Oro\\Bundle\\TagBundle\\Entity\\Tag',
    'acl_resource' => 'oro_tag_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 't.id',
          1 => 't.name',
          2 => 'COUNT(tt.id) as usage',
          3 => 'ta.name as taxonomyName',
          4 => 'IDENTITY(t.taxonomy) as taxonomy',
          5 => 'ta.backgroundColor',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TagBundle\\Entity\\Tag',
            'alias' => 't',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            'taxonomy' => 
            array (
              'join' => 't.taxonomy',
              'alias' => 'ta',
            ),
            'tagging' => 
            array (
              'join' => 't.tagging',
              'alias' => 'tt',
            ),
          ),
        ),
        'groupBy' => 't.id',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.tag.name.label',
        'type' => 'field',
        'frontend_type' => 'string',
      ),
      'taxonomyName' => 
      array (
        'label' => 'oro.taxonomy.label',
        'type' => 'field',
        'frontend_type' => 'string',
      ),
      'backgroundColor' => 
      array (
        'label' => 'oro.taxonomy.background_color.label',
        'type' => 'twig',
        'frontend_type' => 'html',
        'template' => '@OroTag/Tag/Datagrid/Property/background_color.html.twig',
      ),
      'usage' => 
      array (
        'label' => 'oro.tag.datagrid.usage_count',
        'type' => 'field',
        'frontend_type' => 'integer',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_tag_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'search_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_tag_search',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_tag',
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
        'name' => 
        array (
          'data_name' => 't.name',
        ),
        'usage' => 
        array (
          'data_name' => 'usage',
        ),
        'taxonomyName' => 
        array (
          'data_name' => 'taxonomyName',
        ),
      ),
      'default' => 
      array (
        'name' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 't.name',
        ),
        'usage' => 
        array (
          'type' => 'number-range',
          'data_name' => 'usage',
          'filter_by_having' => true,
        ),
        'taxonomyName' => 
        array (
          'type' => 'entity',
          'data_name' => 't.taxonomy',
          'renderable' => true,
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\TagBundle\\Entity\\Taxonomy',
              'choice_label' => 'name',
              'translatable_options' => false,
            ),
          ),
        ),
      ),
    ),
    'actions' => 
    array (
      'search' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.tag.datagrid.search',
        'link' => 'search_link',
        'icon' => 'search',
        'acl_resource' => 'oro_tag_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_tag_update',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash-o',
        'acl_resource' => 'oro_tag_delete',
      ),
    ),
  ),
);