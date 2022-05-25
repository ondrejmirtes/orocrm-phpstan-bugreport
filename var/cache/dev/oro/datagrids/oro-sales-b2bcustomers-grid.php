<?php return array (
  'oro-sales-b2bcustomers-grid' => 
  array (
    'extends' => 'base-sales-b2bcustomers-grid',
    'mixins' => 'activity-contact-data-hidden-mixin',
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
          1 => 'account.name as accountName',
          2 => 'CONCAT_WS(\' \', contact.firstName, contact.lastName) as contactName',
          3 => 'baCountry.name as baCountryName',
          4 => 'CONCAT(CASE WHEN ba.regionText IS NOT NULL THEN ba.regionText ELSE baRegion.name END, \'\') as baRegionLabel',
          5 => 'ba.city as baCity',
          6 => 'ba.street as baStreet',
          7 => 'ba.postalCode as baPostalCode',
          8 => 'saCountry.name as saCountryName',
          9 => 'CONCAT(CASE WHEN sa.regionText IS NOT NULL THEN sa.regionText ELSE saRegion.name END, \'\') as saRegionLabel',
          10 => 'sa.city as saCity',
          11 => 'sa.street as saStreet',
          12 => 'sa.postalCode as saPostalCode',
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'c.owner',
              'alias' => 'owner',
            ),
            1 => 
            array (
              'join' => 'c.account',
              'alias' => 'account',
            ),
            2 => 
            array (
              'join' => 'c.contact',
              'alias' => 'contact',
            ),
            3 => 
            array (
              'join' => 'c.billingAddress',
              'alias' => 'ba',
            ),
            4 => 
            array (
              'join' => 'c.shippingAddress',
              'alias' => 'sa',
            ),
            5 => 
            array (
              'join' => 'ba.country',
              'alias' => 'baCountry',
            ),
            6 => 
            array (
              'join' => 'sa.country',
              'alias' => 'saCountry',
            ),
            7 => 
            array (
              'join' => 'ba.region',
              'alias' => 'baRegion',
            ),
            8 => 
            array (
              'join' => 'sa.region',
              'alias' => 'saRegion',
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
      'ownerName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.owner.label',
        'renderable' => false,
      ),
      'accountName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.account_name.label',
        'renderable' => false,
      ),
      'contactName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.contact_name.label',
        'renderable' => false,
      ),
      'baCountryName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.billing_address_country.label',
        'renderable' => false,
      ),
      'baRegionLabel' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.billing_address_region.label',
        'renderable' => false,
      ),
      'baCity' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.billing_address_city.label',
        'renderable' => false,
      ),
      'baStreet' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.billing_address_street.label',
        'renderable' => false,
      ),
      'baPostalCode' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.billing_address_postal_code.label',
        'renderable' => false,
      ),
      'saCountryName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.shipping_address_country.label',
        'renderable' => false,
      ),
      'saRegionLabel' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.shipping_address_region.label',
        'renderable' => false,
      ),
      'saCity' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.shipping_address_city.label',
        'renderable' => false,
      ),
      'saStreet' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.shipping_address_street.label',
        'renderable' => false,
      ),
      'saPostalCode' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.shipping_address_postal_code.label',
        'renderable' => false,
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
        'accountName' => 
        array (
          'data_name' => 'accountName',
        ),
        'contactName' => 
        array (
          'data_name' => 'contactName',
        ),
        'baCountryName' => 
        array (
          'data_name' => 'baCountryName',
        ),
        'baRegionLabel' => 
        array (
          'data_name' => 'baRegionLabel',
        ),
        'baCity' => 
        array (
          'data_name' => 'baCity',
        ),
        'baStreet' => 
        array (
          'data_name' => 'baStreet',
        ),
        'baPostalCode' => 
        array (
          'data_name' => 'baPostalCode',
        ),
        'saCountryName' => 
        array (
          'data_name' => 'saCountryName',
        ),
        'saRegionLabel' => 
        array (
          'data_name' => 'saRegionLabel',
        ),
        'saCity' => 
        array (
          'data_name' => 'saCity',
        ),
        'saStreet' => 
        array (
          'data_name' => 'saStreet',
        ),
        'saPostalCode' => 
        array (
          'data_name' => 'saPostalCode',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'owner' => 
        array (
          'type' => 'choice-tree',
          'data_name' => 'c.owner',
          'label' => 'oro.user.owner.label',
          'renderable' => false,
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'c.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
          'renderable' => false,
        ),
        'accountName' => 
        array (
          'type' => 'string',
          'data_name' => 'accountName',
          'renderable' => false,
        ),
        'contactName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactName',
          'renderable' => false,
        ),
        'baCountryName' => 
        array (
          'type' => 'entity',
          'data_name' => 'ba.country',
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
        'baRegionLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'baRegionLabel',
          'renderable' => false,
        ),
        'baCity' => 
        array (
          'type' => 'string',
          'data_name' => 'baCity',
          'renderable' => false,
        ),
        'baStreet' => 
        array (
          'type' => 'string',
          'data_name' => 'baStreet',
          'renderable' => false,
        ),
        'baPostalCode' => 
        array (
          'type' => 'string',
          'data_name' => 'baPostalCode',
          'renderable' => false,
        ),
        'saCountryName' => 
        array (
          'type' => 'entity',
          'data_name' => 'sa.country',
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
        'saRegionLabel' => 
        array (
          'type' => 'string',
          'data_name' => 'saRegionLabel',
          'renderable' => false,
        ),
        'saCity' => 
        array (
          'type' => 'string',
          'data_name' => 'saCity',
          'renderable' => false,
        ),
        'saStreet' => 
        array (
          'type' => 'string',
          'data_name' => 'saStreet',
          'renderable' => false,
        ),
        'saPostalCode' => 
        array (
          'type' => 'string',
          'data_name' => 'saPostalCode',
          'renderable' => false,
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_b2bcustomer_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_b2bcustomer_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_b2bcustomer',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_b2bcustomer_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_b2bcustomer_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_b2bcustomer_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
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
);