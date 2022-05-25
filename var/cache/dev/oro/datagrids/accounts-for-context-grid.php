<?php return array (
  'accounts-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\AccountBundle\\Entity\\Account',
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
          2 => 'CONCAT_WS(\' \', defaultContact.firstName, defaultContact.lastName) as contactName',
          3 => 'defaultContactEmail.email as contactEmail',
          4 => 'defaultContactPhone.phone as contactPhone',
          5 => 'CONCAT_WS(\' \', accountOwner.firstName, accountOwner.lastName) as ownerName',
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
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.account.id.label',
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
      ),
      'contactPhone' => 
      array (
        'label' => 'oro.account.contact.phone',
        'frontend_type' => 'phone',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.account.owner.label',
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
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
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
          'type' => 'entity',
          'label' => 'oro.user.owner.label',
          'data_name' => 'a.owner',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
              'multiple' => true,
              'choice_label' => 'fullName',
              'translatable_options' => false,
            ),
          ),
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.account.entity_plural_label',
      'entity_pagination' => true,
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
      'routerEnabled' => false,
    ),
  ),
);