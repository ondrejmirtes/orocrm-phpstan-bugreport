<?php return array (
  'accounts-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\AccountBundle\\Entity\\Account',
    'inline_editing' => 
    array (
      'enable' => true,
    ),
    'acl_resource' => 'oro_account_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'a.id',
          1 => 'a.name',
          2 => 'a.createdAt',
          3 => 'a.updatedAt',
          4 => 'CONCAT_WS(\' \', defaultContact.firstName, defaultContact.lastName) as contactName',
          5 => 'defaultContactEmail.email as contactEmail',
          6 => 'defaultContactPhone.phone as contactPhone',
          7 => 'CONCAT_WS(\' \', accountOwner.firstName, accountOwner.lastName) as ownerName',
          8 => 'accountOwner.id as owner',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\AccountBundle\\Entity\\Account',
            'alias' => 'a',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'a.defaultContact',
              'alias' => 'defaultContact',
            ),
            1 => 
            array (
              'join' => 'defaultContact.emails',
              'alias' => 'defaultContactEmail',
              'conditionType' => 'WITH',
              'condition' => 'defaultContactEmail.primary = true',
            ),
            2 => 
            array (
              'join' => 'defaultContact.phones',
              'alias' => 'defaultContactPhone',
              'conditionType' => 'WITH',
              'condition' => 'defaultContactPhone.primary = true',
            ),
            3 => 
            array (
              'join' => 'a.owner',
              'alias' => 'accountOwner',
            ),
          ),
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'owner' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_account_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_account_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_account',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.account.id.label',
        'renderable' => false,
      ),
      'name' => 
      array (
        'label' => 'oro.account.name.label',
      ),
      'contactName' => 
      array (
        'label' => 'oro.account.contact.name',
      ),
      'contactEmail' => 
      array (
        'label' => 'oro.account.contact.email',
        'cellClassName' => 'direction-ltr',
      ),
      'contactPhone' => 
      array (
        'label' => 'oro.account.contact.phone',
        'frontend_type' => 'phone',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.account.owner.label',
        'frontend_type' => 'relation',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view_options' => 
            array (
              'value_field_name' => 'owner',
            ),
          ),
          'autocomplete_api_accessor' => 
          array (
            'class' => 'orouser/js/tools/acl-users-search-api-accessor',
            'permission_check_entity_name' => 'Oro_Bundle_AccountBundle_Entity_Account',
          ),
        ),
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
    'fields_acl' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'a.name',
        ),
        'contactName' => 
        array (
          'data_name' => 'a.defaultContact',
        ),
        'contactEmail' => 
        array (
          'data_name' => 'a.defaultContact',
        ),
        'contactPhone' => 
        array (
          'data_name' => 'a.defaultContact',
        ),
        'ownerName' => 
        array (
          'data_name' => 'a.owner',
        ),
        'createdAt' => 
        array (
          'data_name' => 'a.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'a.updatedAt',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'a.id',
        ),
        'name' => 
        array (
          'data_name' => 'a.name',
        ),
        'contactName' => 
        array (
          'data_name' => 'contactName',
        ),
        'contactEmail' => 
        array (
          'data_name' => 'contactEmail',
        ),
        'contactPhone' => 
        array (
          'data_name' => 'contactPhone',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'a.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'a.updatedAt',
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
          'data_name' => 'a.name',
        ),
        'contactName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactName',
        ),
        'contactEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'contactEmail',
        ),
        'contactPhone' => 
        array (
          'type' => 'string',
          'data_name' => 'contactPhone',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'a.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'a.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'a.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'a.updatedAt',
        ),
        'duplicate' => 
        array (
          'type' => 'duplicate',
          'data_name' => 'a.name',
          'visible' => false,
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_account_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_account_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_account_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
        'defaultMessages' => 
        array (
          'confirm_content' => 'oro.ui.delete_confirm_cascade',
          'confirm_content_params' => 
          array (
            'entity_label' => '@translator->trans(oro.account.entity_label)',
          ),
        ),
      ),
    ),
    'mass_actions' => 
    array (
      'merge' => 
      array (
        'type' => 'merge',
        'entity_name' => 'Oro\\Bundle\\AccountBundle\\Entity\\Account',
        'data_identifier' => 'a.id',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.account.entity_plural_label',
      'export' => true,
      'entity_pagination' => true,
    ),
    'views_list' => '@oro_account.accounts_view_list',
  ),
);