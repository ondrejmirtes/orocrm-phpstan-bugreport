<?php return array (
  'contact-accounts-grid' => 
  array (
    'acl_resource' => 'oro_contact_view',
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
          4 => 'defaultContact.firstName as contactFirstName',
          5 => 'defaultContact.lastName as contactLastName',
          6 => 'defaultContactEmail.email as contactEmail',
          7 => 'defaultContactPhone.phone as contactPhone',
          8 => 'CONCAT_WS(\' \', accountOwner.firstName, accountOwner.lastName) as ownerName',
          9 => '(CASE WHEN (:contact IS NOT NULL) THEN
  CASE WHEN (:contact MEMBER OF a.contacts OR a.id IN (:data_in)) AND a.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN a.id IN (:data_in) AND a.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as hasContact
',
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
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'contact',
          'default' => NULL,
          'type' => 'integer',
        ),
      ),
    ),
    'columns' => 
    array (
      'hasContact' => 
      array (
        'label' => 'oro.contact.assigned_to.label',
        'editable' => true,
        'frontend_type' => 'boolean',
      ),
      'name' => 
      array (
        'label' => 'oro.account.name.label',
      ),
      'contactFirstName' => 
      array (
        'label' => 'oro.account.contact.first_name',
      ),
      'contactLastName' => 
      array (
        'label' => 'oro.account.contact.last_name',
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
        'label' => 'oro.contact.owner.label',
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
        'hasContact' => 
        array (
          'data_name' => 'hasContact',
        ),
        'name' => 
        array (
          'data_name' => 'a.name',
        ),
        'contactFirstName' => 
        array (
          'data_name' => 'contactFirstName',
        ),
        'contactLastName' => 
        array (
          'data_name' => 'contactLastName',
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
        'hasContact' => 'DESC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'hasContact' => 
        array (
          'data_name' => 'hasContact',
          'type' => 'boolean',
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'a.name',
        ),
        'contactFirstName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactFirstName',
        ),
        'contactLastName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactLastName',
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
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'options' => 
    array (
      'entityHint' => 'oro.account.entity_plural_label',
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'hasContact',
        'selectors' => 
        array (
          'included' => '#appendAccounts',
          'excluded' => '#removeAccounts',
        ),
      ),
    ),
  ),
);