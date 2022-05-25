<?php return array (
  'contacts-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\ContactBundle\\Entity\\Contact',
    'mixins' => 
    array (
      0 => 'activity-contact-data-hidden-mixin',
      1 => 'activity-contact-days-since-last-contact-hidden-mixin',
    ),
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
          3 => 'c.createdAt',
          4 => 'c.updatedAt',
          5 => 'c.fax',
          6 => 'c.skype',
          7 => 'c.twitter',
          8 => 'c.facebook',
          9 => 'c.googlePlus',
          10 => 'c.linkedIn',
          11 => 'c.birthday',
          12 => 'c.gender',
          13 => 'picture.originalFilename as pictureFilename',
          14 => 'contactSource.name as source',
          15 => 'email.email',
          16 => 'email.id as emailId',
          17 => 'phone.phone',
          18 => 'phone.id as phoneId',
          19 => 'CONCAT(CASE WHEN address.regionText IS NOT NULL THEN address.regionText ELSE region.name END, \'\') as regionLabel',
          20 => 'country.name as countryName',
          21 => 'address.postalCode as addressPostalCode',
          22 => 'address.city as addressCity',
          23 => 'address.street as addressStreet',
          24 => 'CONCAT_WS(\' \', o.firstName, o.lastName) as ownerName',
          25 => 'CONCAT_WS(\' \', assignedTo.firstName, assignedTo.lastName) as assignedName',
          26 => 'CONCAT_WS(\' \', reportsTo.firstName, reportsTo.lastName) as reportsName',
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
            6 => 
            array (
              'join' => 'c.owner',
              'alias' => 'o',
            ),
            7 => 
            array (
              'join' => 'c.assignedTo',
              'alias' => 'assignedTo',
            ),
            8 => 
            array (
              'join' => 'c.reportsTo',
              'alias' => 'reportsTo',
            ),
            9 => 
            array (
              'join' => 'c.picture',
              'alias' => 'picture',
            ),
          ),
        ),
      ),
      'hints' => 
      array (
        0 => 'HINT_TRANSLATABLE',
      ),
    ),
    'inline_editing' => 
    array (
      'enable' => true,
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.contact.id.label',
        'renderable' => false,
      ),
      'firstName' => 
      array (
        'label' => 'oro.contact.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.contact.last_name.label',
      ),
      'birthday' => 
      array (
        'label' => 'oro.contact.birthday.label',
        'frontend_type' => 'date',
        'renderable' => false,
      ),
      'gender' => 
      array (
        'label' => 'oro.contact.gender.label',
        'frontend_type' => 'select',
        'choices' => '@oro_user.gender_provider->getChoices',
        'renderable' => false,
      ),
      'email' => 
      array (
        'label' => 'oro.contact.email.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'validation_rules' => 
          array (
            'Email' => true,
          ),
          'save_api_accessor' => 
          array (
            'class' => 'orocontact/js/datagrid/inline-editing/save-api-accessor',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_contact_email',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_contact_email',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_ContactBundle_Entity_ContactEmail',
            ),
            'route_parameters_rename_map' => 
            array (
              'emailId' => 'id',
            ),
          ),
        ),
      ),
      'phone' => 
      array (
        'label' => 'oro.contact.contactphone.phone.label',
        'frontend_type' => 'phone',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/text-editor-view',
          ),
          'save_api_accessor' => 
          array (
            'class' => 'orocontact/js/datagrid/inline-editing/save-api-accessor',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_contact_phone',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_contact_phone',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_ContactBundle_Entity_ContactPhone',
            ),
            'route_parameters_rename_map' => 
            array (
              'phoneId' => 'id',
            ),
          ),
        ),
      ),
      'fax' => 
      array (
        'label' => 'oro.contact.fax.label',
        'frontend_type' => 'phone',
        'renderable' => false,
      ),
      'skype' => 
      array (
        'label' => 'oro.contact.skype.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'twitter' => 
      array (
        'label' => 'oro.contact.twitter.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'facebook' => 
      array (
        'label' => 'oro.contact.facebook.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'linkedIn' => 
      array (
        'label' => 'oro.contact.linked_in.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'googlePlus' => 
      array (
        'label' => 'oro.contact.google_plus.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'source' => 
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
      'addressCity' => 
      array (
        'label' => 'oro.contact.contactaddress.city.label',
        'renderable' => false,
      ),
      'addressStreet' => 
      array (
        'label' => 'oro.contact.contactaddress.street.label',
        'renderable' => false,
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
      'pictureFilename' => 
      array (
        'label' => 'oro.contact.picture.label',
        'renderable' => false,
      ),
      'ownerName' => 
      array (
        'label' => 'oro.contact.owner.label',
        'renderable' => false,
      ),
      'assignedName' => 
      array (
        'label' => 'oro.contact.assigned_to.label',
        'renderable' => false,
      ),
      'reportsName' => 
      array (
        'label' => 'oro.contact.reports_to.label',
        'renderable' => false,
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'emailId' => NULL,
      'phoneId' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contact_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_contact_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_contact',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'data_name' => 'c.id',
        ),
        'firstName' => 
        array (
          'data_name' => 'c.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'c.lastName',
        ),
        'birthday' => 
        array (
          'data_name' => 'c.birthday',
        ),
        'gender' => 
        array (
          'data_name' => 'c.gender',
        ),
        'email' => 
        array (
          'data_name' => 'email.email',
        ),
        'phone' => 
        array (
          'data_name' => 'phone.phone',
        ),
        'fax' => 
        array (
          'data_name' => 'c.fax',
        ),
        'skype' => 
        array (
          'data_name' => 'c.skype',
        ),
        'twitter' => 
        array (
          'data_name' => 'c.twitter',
        ),
        'facebook' => 
        array (
          'data_name' => 'c.facebook',
        ),
        'linkedIn' => 
        array (
          'data_name' => 'c.linkedIn',
        ),
        'googlePlus' => 
        array (
          'data_name' => 'c.googlePlus',
        ),
        'source' => 
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
        'addressCity' => 
        array (
          'data_name' => 'address.city',
        ),
        'addressStreet' => 
        array (
          'data_name' => 'address.street',
        ),
        'createdAt' => 
        array (
          'data_name' => 'c.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'c.updatedAt',
        ),
        'pictureFilename' => 
        array (
          'data_name' => 'pictureFilename',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'assignedName' => 
        array (
          'data_name' => 'assignedName',
        ),
        'reportsName' => 
        array (
          'data_name' => 'reportsName',
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
        'birthday' => 
        array (
          'type' => 'date',
          'data_name' => 'c.birthday',
          'renderable' => false,
        ),
        'gender' => 
        array (
          'type' => 'choice',
          'data_name' => 'c.gender',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_user.gender_provider->getChoices',
            ),
          ),
          'renderable' => false,
        ),
        'email' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
        'phone' => 
        array (
          'type' => 'string',
          'data_name' => 'phone.phone',
        ),
        'fax' => 
        array (
          'type' => 'string',
          'data_name' => 'c.fax',
          'renderable' => false,
        ),
        'skype' => 
        array (
          'type' => 'string',
          'data_name' => 'c.skype',
          'renderable' => false,
        ),
        'twitter' => 
        array (
          'type' => 'string',
          'data_name' => 'c.twitter',
          'renderable' => false,
        ),
        'facebook' => 
        array (
          'type' => 'string',
          'data_name' => 'c.facebook',
          'renderable' => false,
        ),
        'linkedIn' => 
        array (
          'type' => 'string',
          'data_name' => 'c.linkedIn',
          'renderable' => false,
        ),
        'googlePlus' => 
        array (
          'type' => 'string',
          'data_name' => 'c.googlePlus',
          'renderable' => false,
        ),
        'source' => 
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
          'type' => 'choice',
          'data_name' => 'address.country',
          'renderable' => false,
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_address.provider.country->getCountriesNames',
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
        'addressCity' => 
        array (
          'type' => 'string',
          'data_name' => 'addressCity',
          'renderable' => false,
        ),
        'addressStreet' => 
        array (
          'type' => 'string',
          'data_name' => 'addressStreet',
          'renderable' => false,
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'c.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'c.updatedAt',
          'renderable' => false,
        ),
        'pictureFilename' => 
        array (
          'type' => 'string',
          'data_name' => 'pictureFilename',
          'renderable' => false,
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'c.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'assignedName' => 
        array (
          'type' => 'choice-tree',
          'data_name' => 'c.assignedTo',
          'autocomplete_alias' => 'users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
          'renderable' => false,
        ),
        'reportsName' => 
        array (
          'type' => 'string',
          'data_name' => 'reportsName',
          'renderable' => false,
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'c.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'duplicate' => 
        array (
          'type' => 'duplicate',
          'data_name' => 'email.email',
          'visible' => false,
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_contact_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_contact_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_contact_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'mass_actions' => 
    array (
      'merge' => 
      array (
        'type' => 'merge',
        'entity_name' => 'Oro\\Bundle\\ContactBundle\\Entity\\Contact',
        'data_identifier' => 'c.id',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.contact.entity_plural_label',
      'export' => true,
      'entity_pagination' => true,
    ),
    'views_list' => '@oro_contact.contacts_view_list',
  ),
  'activity-contact-data-hidden-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '__root_entity__.ac_contact_count as timesContacted',
          1 => '__root_entity__.ac_contact_count_in as timesContactedIn',
          2 => '__root_entity__.ac_contact_count_out as timesContactedOut',
          3 => '__root_entity__.ac_last_contact_date as lastContactedDate',
          4 => '__root_entity__.ac_last_contact_date_in as lastContactedDateIn',
          5 => '__root_entity__.ac_last_contact_date_out as lastContactedDateOut',
        ),
      ),
    ),
    'columns' => 
    array (
      'timesContacted' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'timesContactedIn' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count_in.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'timesContactedOut' => 
      array (
        'label' => 'oro.activity_contact.ac_contact_count_out.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'lastContactedDate' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
      'lastContactedDateIn' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date_in.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
      'lastContactedDateOut' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date_out.label',
        'frontend_type' => 'datetime',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'timesContacted' => 
        array (
          'data_name' => 'timesContacted',
        ),
        'timesContactedIn' => 
        array (
          'data_name' => 'timesContactedIn',
        ),
        'timesContactedOut' => 
        array (
          'data_name' => 'timesContactedOut',
        ),
        'lastContactedDate' => 
        array (
          'data_name' => 'lastContactedDate',
        ),
        'lastContactedDateIn' => 
        array (
          'data_name' => 'lastContactedDateIn',
        ),
        'lastContactedDateOut' => 
        array (
          'data_name' => 'lastContactedDateOut',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'timesContacted' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContacted',
          'renderable' => false,
        ),
        'timesContactedIn' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContactedIn',
          'renderable' => false,
        ),
        'timesContactedOut' => 
        array (
          'type' => 'number-range',
          'data_name' => 'timesContactedOut',
          'renderable' => false,
        ),
        'lastContactedDate' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDate',
          'renderable' => false,
        ),
        'lastContactedDateIn' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDateIn',
          'renderable' => false,
        ),
        'lastContactedDateOut' => 
        array (
          'type' => 'datetime',
          'data_name' => 'lastContactedDateOut',
          'renderable' => false,
        ),
      ),
    ),
  ),
  'activity-contact-days-since-last-contact-hidden-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'DATE_DIFF(CURRENT_DATE(), __root_entity__.ac_last_contact_date) as daysSinceLastContact',
        ),
      ),
    ),
    'columns' => 
    array (
      'daysSinceLastContact' => 
      array (
        'label' => 'oro.activity_contact.days_since_last_contact.label',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'daysSinceLastContact' => 
        array (
          'data_name' => 'daysSinceLastContact',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'daysSinceLastContact' => 
        array (
          'type' => 'number-range',
          'data_name' => 'daysSinceLastContact',
          'renderable' => false,
        ),
      ),
    ),
  ),
);