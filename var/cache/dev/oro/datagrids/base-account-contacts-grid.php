<?php return array (
  'base-account-contacts-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\ContactBundle\\Entity\\Contact',
    'acl_resource' => 'oro_contact_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.lastName',
          2 => 'c.firstName',
          3 => 'contactSource.label as contactSourceLabel',
          4 => 'email.email as primaryEmail',
          5 => 'phone.phone as primaryPhone',
          6 => 'CONCAT(CASE WHEN address.regionText IS NOT NULL THEN address.regionText ELSE region.name END, \'\') as regionLabel',
          7 => 'country.name as countryName',
          8 => 'address.postalCode as addressPostalCode',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ContactBundle\\Entity\\Contact',
            'alias' => 'c',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'c.addresses',
              'alias' => 'address',
              'conditionType' => 'WITH',
              'condition' => 'address.primary = true',
            ),
            1 => 
            array (
              'join' => 'c.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            2 => 
            array (
              'join' => 'c.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
            3 => 
            array (
              'join' => 'c.groups',
              'alias' => 'contactGroup',
            ),
            4 => 
            array (
              'join' => 'c.source',
              'alias' => 'contactSource',
            ),
            5 => 
            array (
              'join' => 'address.country',
              'alias' => 'country',
            ),
            6 => 
            array (
              'join' => 'address.region',
              'alias' => 'region',
            ),
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'first_name' => 
        array (
          'data_name' => 'c.firstName',
        ),
        'last_name' => 
        array (
          'data_name' => 'c.lastName',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'email.email',
        ),
        'primaryPhone' => 
        array (
          'data_name' => 'phone.phone',
        ),
        'countryName' => 
        array (
          'data_name' => 'country.name',
        ),
        'regionLabel' => 
        array (
          'data_name' => 'regionLabel',
        ),
        'addressPostalCode' => 
        array (
          'data_name' => 'address.postalCode',
        ),
      ),
      'default' => 
      array (
        'last_name' => 'ASC',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.entity_plural_label',
    ),
  ),
);