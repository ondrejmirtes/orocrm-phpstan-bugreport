<?php return array (
  'contact-group-contacts-grid' => 
  array (
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
          3 => '(CASE WHEN (:group IS NOT NULL) THEN
  CASE WHEN (:group MEMBER OF c.groups OR c.id IN (:data_in)) AND c.id NOT IN (:data_not_in)
  THEN true ELSE false END
ELSE
  CASE WHEN c.id IN (:data_in) AND c.id NOT IN (:data_not_in)
  THEN true ELSE false END
END) as hasGroup
',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\ContactBundle\\Entity\\Contact',
            'alias' => 'c',
          ),
        ),
      ),
      'bind_parameters' => 
      array (
        0 => 
        array (
          'name' => 'group',
          'default' => NULL,
        ),
      ),
    ),
    'columns' => 
    array (
      'hasGroup' => 
      array (
        'label' => 'oro.contact.group.has_group.label',
        'editable' => true,
        'frontend_type' => 'boolean',
      ),
      'firstName' => 
      array (
        'label' => 'oro.contact.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.contact.last_name.label',
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'hasGroup' => 
        array (
          'data_name' => 'hasGroup',
          'type' => 'boolean',
        ),
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'c.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'c.firstName',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'hasGroup' => 
        array (
          'data_name' => 'hasGroup',
        ),
        'firstName' => 
        array (
          'data_name' => 'c.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'c.lastName',
        ),
      ),
      'default' => 
      array (
        'hasGroup' => 'DESC',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.entity_plural_label',
      'rowSelection' => 
      array (
        'dataField' => 'id',
        'columnName' => 'hasGroup',
        'selectors' => 
        array (
          'included' => '#groupAppendContacts',
          'excluded' => '#groupRemoveContacts',
        ),
      ),
    ),
  ),
);