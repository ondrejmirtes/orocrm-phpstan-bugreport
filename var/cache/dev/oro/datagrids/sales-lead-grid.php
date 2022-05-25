<?php return array (
  'sales-lead-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
    'mixins' => 
    array (
      0 => 'activity-contact-data-hidden-mixin',
      1 => 'activity-contact-days-since-last-contact-hidden-mixin',
    ),
    'options' => 
    array (
      'entityHint' => 'oro.sales.lead.entity_plural_label',
      'export' => true,
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_sales_lead_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'l.id',
          1 => 'l.name',
          2 => 'l.firstName',
          3 => 'l.lastName',
          4 => 'l.createdAt',
          5 => 'l.updatedAt',
          6 => 'email.email',
          7 => 'email.id as emailId',
          8 => 'phone.phone',
          9 => 'phone.id as phoneId',
          10 => 'l.jobTitle',
          11 => 'l.companyName',
          12 => 'l.industry',
          13 => 'l.website',
          14 => 'l.numberOfEmployees',
          15 => 'l.twitter',
          16 => 'l.linkedIn',
          17 => 'IDENTITY(l.source) as source',
          18 => 'IDENTITY(l.status) as status',
          19 => 'country.name as countryName',
          20 => 'address.postalCode as addressPostalCode',
          21 => 'address.city as addressCity',
          22 => 'address.street as addressStreet',
          23 => 'CONCAT(
    CASE WHEN address.regionText IS NOT NULL
      THEN address.regionText
      ELSE region.name
    END, \'\'
) as regionLabel
',
          24 => 'CONCAT_WS(\' \', own.firstName, own.lastName) as ownerName',
          25 => 'CONCAT_WS(\' \', c.firstName, c.lastName) as contactName',
          26 => 'own.id as owner',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
            'alias' => 'l',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'l.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            1 => 
            array (
              'join' => 'l.phones',
              'alias' => 'phone',
              'conditionType' => 'WITH',
              'condition' => 'phone.primary = true',
            ),
            2 => 
            array (
              'join' => 'l.addresses',
              'alias' => 'address',
              'conditionType' => 'WITH',
              'condition' => 'address.primary = true',
            ),
            3 => 
            array (
              'join' => 'address.country',
              'alias' => 'country',
            ),
            4 => 
            array (
              'join' => 'address.region',
              'alias' => 'region',
            ),
            5 => 
            array (
              'join' => 'l.owner',
              'alias' => 'own',
            ),
            6 => 
            array (
              'join' => 'l.contact',
              'alias' => 'c',
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
        'label' => 'oro.sales.lead.id.label',
        'renderable' => false,
      ),
      'name' => 
      array (
        'label' => 'oro.sales.lead.name.label',
      ),
      'status' => 
      array (
        'context' => 
        array (
          'enum_code' => 'lead_status',
        ),
        'frontend_type' => 'enum',
        'label' => 'oro.sales.lead.status.label',
      ),
      'firstName' => 
      array (
        'label' => 'oro.sales.lead.first_name.label',
      ),
      'lastName' => 
      array (
        'label' => 'oro.sales.lead.last_name.label',
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
        'renderable' => false,
      ),
      'jobTitle' => 
      array (
        'label' => 'oro.sales.lead.job_title.label',
        'renderable' => false,
      ),
      'companyName' => 
      array (
        'label' => 'oro.sales.lead.company_name.label',
        'renderable' => false,
      ),
      'industry' => 
      array (
        'label' => 'oro.sales.lead.industry.label',
        'renderable' => false,
      ),
      'website' => 
      array (
        'label' => 'oro.sales.lead.website.label',
        'renderable' => false,
      ),
      'numberOfEmployees' => 
      array (
        'label' => 'oro.sales.lead.datagrid.number_of_employees',
        'frontend_type' => 'integer',
        'renderable' => false,
      ),
      'source' => 
      array (
        'context' => 
        array (
          'enum_code' => 'lead_source',
        ),
        'frontend_type' => 'enum',
        'label' => 'oro.sales.lead.source.label',
        'renderable' => false,
      ),
      'email' => 
      array (
        'label' => 'oro.sales.lead.email.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/text-editor-view',
          ),
          'save_api_accessor' => 
          array (
            'class' => 'orosales/js/datagrid/inline-editing/save-api-accessor',
            'field_name' => 'email',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_leademail',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_leademail',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_SalesBundle_Entity_LeadEmail',
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
        'label' => 'oro.sales.lead.phone_number.label',
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
            'class' => 'orosales/js/datagrid/inline-editing/save-api-accessor',
            'field_name' => 'phone',
            'route_create_entity' => 
            array (
              'name' => 'oro_api_post_lead_phone',
              'http_method' => 'POST',
            ),
            'route_delete_entity' => 
            array (
              'name' => 'oro_api_delete_lead_phone',
              'http_method' => 'DELETE',
            ),
            'default_route_parameters' => 
            array (
              'className' => 'Oro_Bundle_SalesBundle_Entity_LeadPhone',
            ),
            'route_parameters_rename_map' => 
            array (
              'phoneId' => 'id',
            ),
          ),
        ),
      ),
      'countryName' => 
      array (
        'label' => 'oro.sales.lead.datagrid.country',
      ),
      'regionLabel' => 
      array (
        'label' => 'oro.sales.lead.datagrid.region',
      ),
      'addressPostalCode' => 
      array (
        'label' => 'oro.sales.lead.datagrid.postal_code',
      ),
      'addressCity' => 
      array (
        'label' => 'oro.sales.lead.datagrid.city',
        'renderable' => false,
      ),
      'addressStreet' => 
      array (
        'label' => 'oro.sales.lead.datagrid.street',
        'renderable' => false,
      ),
      'ownerName' => 
      array (
        'label' => 'oro.sales.lead.owner.label',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view' => 'oroform/js/app/views/editor/related-id-relation-editor-view',
            'view_options' => 
            array (
              'value_field_name' => 'owner',
            ),
          ),
          'autocomplete_api_accessor' => 
          array (
            'class' => 'orouser/js/tools/acl-users-search-api-accessor',
            'permission_check_entity_name' => 'Oro_Bundle_SalesBundle_Entity_Lead',
          ),
        ),
      ),
      'contactName' => 
      array (
        'label' => 'oro.sales.lead.contact.label',
        'renderable' => false,
      ),
      'twitter' => 
      array (
        'label' => 'oro.sales.lead.twitter.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
      'linkedIn' => 
      array (
        'label' => 'oro.sales.lead.linked_in.label',
        'frontend_type' => 'string',
        'renderable' => false,
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'owner' => NULL,
      'emailId' => NULL,
      'phoneId' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_lead_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_lead_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_lead',
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
          'data_name' => 'l.id',
        ),
        'name' => 
        array (
          'data_name' => 'l.name',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'firstName' => 
        array (
          'data_name' => 'l.firstName',
        ),
        'lastName' => 
        array (
          'data_name' => 'l.lastName',
        ),
        'createdAt' => 
        array (
          'data_name' => 'l.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'l.updatedAt',
        ),
        'jobTitle' => 
        array (
          'data_name' => 'l.jobTitle',
        ),
        'companyName' => 
        array (
          'data_name' => 'l.companyName',
        ),
        'industry' => 
        array (
          'data_name' => 'l.industry',
        ),
        'website' => 
        array (
          'data_name' => 'l.website',
        ),
        'numberOfEmployees' => 
        array (
          'data_name' => 'l.numberOfEmployees',
        ),
        'source' => 
        array (
          'data_name' => 'source',
        ),
        'email' => 
        array (
          'data_name' => 'email.email',
        ),
        'phone' => 
        array (
          'data_name' => 'phone.phone',
        ),
        'countryName' => 
        array (
          'data_name' => 'address.country',
        ),
        'regionLabel' => 
        array (
          'data_name' => 'regionLabel',
        ),
        'addressPostalCode' => 
        array (
          'data_name' => 'addressPostalCode',
        ),
        'addressCity' => 
        array (
          'data_name' => 'address.city',
        ),
        'addressStreet' => 
        array (
          'data_name' => 'address.street',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'contactName' => 
        array (
          'data_name' => 'contactName',
        ),
        'twitter' => 
        array (
          'data_name' => 'l.twitter',
        ),
        'linkedIn' => 
        array (
          'data_name' => 'l.linkedIn',
        ),
      ),
      'default' => 
      array (
        'createdAt' => 'DESC',
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_lead_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_lead_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_lead_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'l.name',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'data_name' => 'status',
          'enum_code' => 'lead_status',
        ),
        'firstName' => 
        array (
          'type' => 'string',
          'data_name' => 'l.firstName',
        ),
        'lastName' => 
        array (
          'type' => 'string',
          'data_name' => 'l.lastName',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'l.createdAt',
          'renderable' => false,
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'l.updatedAt',
          'renderable' => false,
        ),
        'jobTitle' => 
        array (
          'type' => 'string',
          'data_name' => 'l.jobTitle',
          'renderable' => false,
        ),
        'companyName' => 
        array (
          'type' => 'string',
          'data_name' => 'l.companyName',
          'renderable' => false,
        ),
        'industry' => 
        array (
          'type' => 'string',
          'data_name' => 'l.industry',
          'renderable' => false,
        ),
        'website' => 
        array (
          'type' => 'string',
          'data_name' => 'l.website',
          'renderable' => false,
        ),
        'numberOfEmployees' => 
        array (
          'type' => 'number-range',
          'data_name' => 'l.numberOfEmployees',
          'renderable' => false,
        ),
        'source' => 
        array (
          'type' => 'enum',
          'enum_code' => 'lead_source',
          'data_name' => 'source',
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
        'countryName' => 
        array (
          'type' => 'entity',
          'data_name' => 'address.country',
          'renderable' => false,
          'options' => 
          array (
            'lazy' => true,
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\AddressBundle\\Entity\\Country',
              'choice_label' => 'name',
              'query_builder' => '@oro_sales.lead.datagrid_helper->getCountryFilterQueryBuilder',
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
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'l.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'contactName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactName',
          'renderable' => false,
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'l.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
        'twitter' => 
        array (
          'type' => 'string',
          'data_name' => 'l.twitter',
          'renderable' => false,
        ),
        'linkedIn' => 
        array (
          'type' => 'string',
          'data_name' => 'l.linkedIn',
          'renderable' => false,
        ),
      ),
    ),
    'views_list' => '@oro_sales.lead.datagrid_view_list',
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