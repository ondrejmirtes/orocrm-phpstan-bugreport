<?php return array (
  'website-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\TrackingBundle\\Entity\\TrackingWebsite',
    'acl_resource' => 'oro_tracking_website_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'website.id',
          1 => 'website.name',
          2 => 'website.identifier',
          3 => 'website.url',
          4 => 'owner.id as ownerId',
          5 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
          6 => 'website.createdAt',
          7 => 'website.updatedAt',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\TrackingBundle\\Entity\\TrackingWebsite',
            'alias' => 'website',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'website.owner',
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
        'label' => 'oro.tracking.trackingwebsite.name.label',
      ),
      'identifier' => 
      array (
        'label' => 'oro.tracking.trackingwebsite.identifier.label',
      ),
      'url' => 
      array (
        'type' => 'twig',
        'label' => 'oro.tracking.trackingwebsite.url.label',
        'frontend_type' => 'html',
        'template' => '@OroTracking/TrackingWebsite/Property/url.html.twig',
      ),
      'ownerName' => 
      array (
        'type' => 'twig',
        'label' => 'oro.tracking.trackingwebsite.owner.label',
        'frontend_type' => 'html',
        'template' => '@OroTracking/TrackingWebsite/Property/owner.html.twig',
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
        'name' => 
        array (
          'data_name' => 'website.name',
        ),
        'identifier' => 
        array (
          'data_name' => 'website.identifier',
        ),
        'url' => 
        array (
          'data_name' => 'website.url',
        ),
        'ownerName' => 
        array (
          'data_name' => 'website.ownerName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'website.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'website.updatedAt',
        ),
      ),
      'default' => 
      array (
        'identifier' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'website.name',
        ),
        'identifier' => 
        array (
          'type' => 'string',
          'data_name' => 'website.identifier',
        ),
        'url' => 
        array (
          'type' => 'string',
          'data_name' => 'website.url',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'website.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'website.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'website.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'website.updatedAt',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_tracking_website_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_tracking_website_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_tracking_website',
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
        'acl_resource' => 'oro_tracking_website_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_tracking_website_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'pencil-square-o',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_tracking_website_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash-o',
        'link' => 'delete_link',
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
    ),
  ),
);