<?php return array (
  'dashboard-my-accounts-activity-grid' => 
  array (
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
          2 => 'defaultContactEmail.email as contactEmail',
          3 => 'defaultContactPhone.phone as contactPhone',
          4 => 'max(history.visitedAt) as visitDate',
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
          ),
          'inner' => 
          array (
            0 => 
            array (
              'join' => 'Oro\\Bundle\\NavigationBundle\\Entity\\NavigationHistoryItem',
              'alias' => 'history',
              'conditionType' => 'WITH',
              'condition' => 'a.id=history.entityId AND history.route=\'oro_account_view\'',
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
        'groupBy' => 'a.id',
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
    'sorters' => 
    array (
      'visitDate' => 
      array (
        'history.' => 'DESC',
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'type' => 'twig',
        'label' => 'oro.account.name.label',
        'frontend_type' => 'html',
        'template' => '@OroAccount/Account/Datagrid/Property/accountName.html.twig',
      ),
      'contactEmail' => 
      array (
        'label' => 'oro.contact.contactemail.email.label',
        'cellClassName' => 'direction-ltr',
      ),
      'contactPhone' => 
      array (
        'label' => 'oro.contact.contactphone.phone.label',
        'frontend_type' => 'phone',
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
        'contactEmail' => 
        array (
          'data_name' => 'a.defaultContact',
        ),
        'contactPhone' => 
        array (
          'data_name' => 'a.defaultContact',
        ),
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.account.entity_plural_label',
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