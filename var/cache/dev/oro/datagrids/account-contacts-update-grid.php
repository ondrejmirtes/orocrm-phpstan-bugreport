<?php return array (
  'account-contacts-update-grid' => 
  array (
    'extends' => 'base-account-contacts-grid',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '(CASE WHEN (:account IS NOT NULL) THEN
  CASE WHEN (:account MEMBER OF c.accounts OR c.id IN (:data_in)) AND c.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN c.id IN (:data_in) AND c.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as hasContact
',
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'account',
          'default' => NULL,
        ),
      ),
    ),
    'columns' => 
    array (
      'hasContact' => 
      array (
        'label' => 'oro.account.assigned.label',
        'editable' => true,
        'frontend_type' => 'boolean',
      ),
      'first_name' => 
      array (
        'label' => 'oro.contact.first_name.label',
        'data_name' => 'firstName',
      ),
      'last_name' => 
      array (
        'label' => 'oro.contact.last_name.label',
        'data_name' => 'lastName',
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
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'hasContact' => 
        array (
          'data_name' => 'hasContact',
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
        'first_name' => 
        array (
          'type' => 'string',
          'data_name' => 'c.firstName',
        ),
        'last_name' => 
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
    'options' => 
    array (
      'routerEnabled' => false,
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'hasContact',
        'selectors' => 
        array (
          'included' => '#appendContacts',
          'excluded' => '#removeContacts',
        ),
      ),
    ),
  ),
);