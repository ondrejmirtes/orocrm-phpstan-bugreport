<?php return array (
  'taxonomy-grid' => 
  array (
    'options' => 
    array (
      'entityHint' => 'oro.tag.taxonomy.datagrid.entity_hint',
      'entity_pagination' => true,
    ),
    'extended_entity_name' => 'Oro\\Bundle\\TagBundle\\Entity\\Taxonomy',
    'acl_resource' => 'oro_taxonomy_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 't.id',
          1 => 't.name',
          2 => 't.backgroundColor',
          3 => 'COUNT(tt.id) as usage',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TagBundle\\Entity\\Taxonomy',
            'alias' => 't',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            'tagging' => 
            array (
              'join' => 't.tags',
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
        'label' => 'oro.taxonomy.name.label',
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
        'route' => 'oro_taxonomy_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_taxonomy_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_taxonomy',
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
          'type' => 'number',
          'data_name' => 'usage',
          'filter_by_having' => true,
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.view',
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_taxonomy_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'edit',
        'acl_resource' => 'oro_taxonomy_update',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash',
        'acl_resource' => 'oro_taxonomy_delete',
      ),
    ),
  ),
);