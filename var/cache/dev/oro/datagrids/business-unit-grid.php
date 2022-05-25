<?php return array (
  'business-unit-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
    'options' => 
    array (
      'entityHint' => 'oro.organization.businessunit.entity_plural_label',
      'entity_pagination' => true,
    ),
    'mass_actions' => 
    array (
      'delete' => 
      array (
        'disabled' => true,
      ),
    ),
    'source' => 
    array (
      'type' => 'orm',
      'skip_acl_apply' => true,
      'query' => 
      array (
        'select' => 
        array (
          0 => 'u.id',
          1 => 'u.name',
          2 => 'u.email',
          3 => 'u.phone',
          4 => 'u.createdAt',
          5 => 'owner.name as ownerName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
            'alias' => 'u',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            'owner' => 
            array (
              'join' => 'u.owner',
              'alias' => 'owner',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.organization.businessunit.name.label',
      ),
      'email' => 
      array (
        'label' => 'oro.organization.businessunit.email.label',
      ),
      'phone' => 
      array (
        'label' => 'oro.organization.businessunit.phone.label',
        'frontend_type' => 'phone',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.organization.businessunit.owner.label',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_business_unit_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_business_unit_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_businessunit',
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
        'link' => 'view_link',
        'icon' => 'eye',
        'acl_resource' => 'oro_business_unit_view',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'label' => 'oro.grid.action.update',
        'link' => 'update_link',
        'icon' => 'pencil-square-o',
        'acl_resource' => 'oro_business_unit_update',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'label' => 'oro.grid.action.delete',
        'link' => 'delete_link',
        'icon' => 'trash-o',
        'acl_resource' => 'oro_business_unit_delete',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'u.name',
        ),
        'email' => 
        array (
          'data_name' => 'u.email',
        ),
        'phone' => 
        array (
          'data_name' => 'u.phone',
        ),
        'ownerName' => 
        array (
          'data_name' => 'owner.name',
        ),
        'createdAt' => 
        array (
          'data_name' => 'u.createdAt',
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
          'data_name' => 'u.name',
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'u.email',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'u.phone',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-tree',
          'autocomplete_alias' => 'business_units_tree_search_handler',
          'data_name' => 'u.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'u.createdAt',
        ),
      ),
    ),
  ),
);