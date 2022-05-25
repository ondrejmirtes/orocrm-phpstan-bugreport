<?php return array (
  'dashboards-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\DashboardBundle\\Entity\\Dashboard',
    'acl_resource' => 'oro_dashboard_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'dashboard.id',
          1 => 'dashboard.label',
          2 => 'owner.id as ownerId',
          3 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
          4 => 'dashboard.createdAt',
          5 => 'dashboard.updatedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DashboardBundle\\Entity\\Dashboard',
            'alias' => 'dashboard',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'dashboard.owner',
              'alias' => 'owner',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'label' => 
      array (
        'label' => 'oro.dashboard.label.label',
      ),
      'ownerName' => 
      array (
        'type' => 'twig',
        'label' => 'oro.dashboard.owner.label',
        'frontend_type' => 'html',
        'template' => '@OroDashboard/Dashboard/Datagrid/Property/owner.html.twig',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'updatedAt' => 
      array (
        'label' => 'oro.ui.updated_at',
        'frontend_type' => 'datetime',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'data_name' => 'dashboard.label',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'dashboard.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'dashboard.updatedAt',
        ),
      ),
      'disable_default_sorting' => true,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'label' => 
        array (
          'type' => 'string',
          'data_name' => 'dashboard.label',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'dashboard.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'dashboard.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'dashboard.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'dashboard.updatedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_dashboard_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_dashboard_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_dashboard',
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
        'acl_resource' => 'oro_dashboard_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_dashboard_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_dashboard_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
  ),
);