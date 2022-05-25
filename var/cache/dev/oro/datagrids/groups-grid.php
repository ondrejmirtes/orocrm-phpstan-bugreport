<?php return array (
  'groups-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\UserBundle\\Entity\\Group',
    'options' => 
    array (
      'entityHint' => 'oro.user.group.entity_plural_label',
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_user_group_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'g.id',
          1 => 'g.name',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\UserBundle\\Entity\\Group',
            'alias' => 'g',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.user.group.name.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_user_group_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_group',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_user_group_update',
        'rowAction' => true,
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash-o',
        'acl_resource' => 'oro_user_group_delete',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'g.name',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'g.name',
        ),
      ),
    ),
  ),
);