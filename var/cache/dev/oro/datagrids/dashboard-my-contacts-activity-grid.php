<?php return array (
  'dashboard-my-contacts-activity-grid' => 
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
          1 => 'CONCAT_WS(\' \', c.firstName, c.lastName) as contactName',
          2 => 'email.email as primaryEmail',
          3 => 'phone.phone as primaryPhone',
          4 => 'max(history.visitedAt) as visitDate',
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
              'join' => 'c.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            1 => 
            array (
              'join' => 'c.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
          ),
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\NavigationBundle\\Entity\\NavigationHistoryItem',
              'alias' => 'history',
              'conditionType' => 'WITH',
              'condition' => 'c.id=history.entityId AND history.route=\'oro_contact_view\'',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'history.user = @oro_security.token_accessor->getUserId',
          ),
        ),
        'groupBy' => 'c.id, contactName, primaryEmail, primaryPhone',
        'orderBy' => 
        array (
          0 => 
          array (
            'column' => 'visitDate',
            'dir' => 'desc',
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'contactName' => 
      array (
        'type' => 'twig',
        'label' => 'oro.contact.datagrid.contact_name',
        'frontend_type' => 'html',
        'template' => '@OroContact/Contact/Datagrid/Property/contactName.html.twig',
      ),
      'primaryEmail' => 
      array (
        'label' => 'oro.contact.email.label',
        'cellClassName' => 'direction-ltr',
      ),
      'primaryPhone' => 
      array (
        'label' => 'oro.contact.contactphone.phone.label',
        'frontend_type' => 'phone',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.entity_plural_label',
      'toolbarOptions' => 
      array (
        'hide' => true,
        'pageSize' => 
        array (
          'items' => 
          array (
            0 => 10,
          ),
          'default_per_page' => 10,
        ),
      ),
    ),
  ),
);