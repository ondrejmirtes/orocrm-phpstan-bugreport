<?php return array (
  'oro_dotmailer_address_books_grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\AddressBook',
    'channel_limitation' => 
    array (
      'channel_relation_path' => '.channel',
    ),
    'options' => 
    array (
      'entityHint' => 'oro.dotmailer.addressbook.datagrid.entity_hint',
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'addressBook.id',
          1 => 'addressBook.name',
          2 => 'addressBook.contactCount',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\DotmailerBundle\\Entity\\AddressBook',
            'alias' => 'addressBook',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'addressBook.visibility',
              'alias' => 'address_book_visibility',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'addressBook.marketingList IS NULL',
            1 => 'addressBook.owner = @oro_security.token_accessor->getOrganizationId',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.dotmailer.addressbook.name.label',
      ),
      'contactCount' => 
      array (
        'label' => 'oro.dotmailer.addressbook.contact_count.label',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'addressBook.name',
        ),
        'contactCount' => 
        array (
          'data_name' => 'addressBook.contactCount',
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
          'data_name' => 'addressBook.name',
        ),
        'contactCount' => 
        array (
          'type' => 'string',
          'data_name' => 'addressBook.contactCount',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
  ),
);