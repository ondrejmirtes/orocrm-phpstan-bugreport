<?php return array (
  'contacts-select-grid' => 
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
          1 => 'c.firstName',
          2 => 'c.lastName',
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
              'join' => 'c.source',
              'alias' => 'contactSource',
            ),
            4 => 
            array (
              'join' => 'address.country',
              'alias' => 'country',
            ),
            5 => 
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
    'columns' => 
    array (
      'firstName' => 
      array (
        'label' => 'oro.contact.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.contact.last_name.label',
      ),
      'primaryEmail' => 
      array (
        'label' => 'oro.contact.email.label',
      ),
      'primaryPhone' => 
      array (
        'label' => 'oro.contact.contactphone.phone.label',
        'frontend_type' => 'phone',
      ),
      'contactSourceLabel' => 
      array (
        'label' => 'oro.contact.source.label',
      ),
      'countryName' => 
      array (
        'label' => 'oro.contact.contactaddress.country.label',
      ),
      'regionLabel' => 
      array (
        'label' => 'oro.contact.contactaddress.region.label',
      ),
      'addressPostalCode' => 
      array (
        'label' => 'oro.contact.contactaddress.postal_code.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'data_name' => 'c.firstName',
        ),
        'lastName' => 
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
        'contactSourceLabel' => 
        array (
          'data_name' => 'contactSource.label',
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
        'lastName' => 'ASC',
        'firstName' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'c.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'c.lastName',
        ),
        'primaryEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
        'primaryPhone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone.phone',
        ),
        'contactSourceLabel' => 
        array (
          'type' => 'entity',
          'data_name' => 'contactSource.name',
          'renderable' => false,
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\ContactBundle\\Entity\\Source',
              'choice_label' => 'label',
              'translatable_options' => false,
            ),
          ),
        ),
        'countryName' => 
        array (
          'type' => 'entity',
          'data_name' => 'address.country',
          'renderable' => false,
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\AddressBundle\\Entity\\Country',
              'choice_label' => 'name',
              'query_builder' => '@oro_contact.contact.datagrid_helper->getCountryFilterQueryBuilder',
              'translatable_options' => false,
            ),
          ),
        ),
        'regionLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'regionLabel',
          'renderable' => false,
        ),
        'addressPostalCode' => 
        array (
          'type' => 'string',
          'data_name' => 'addressPostalCode',
          'renderable' => false,
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.entity_plural_label',
    ),
  ),
);