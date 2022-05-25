<?php return array (
  'sales-opportunity-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
    'mixins' => 
    array (
      0 => 'activity-contact-data-hidden-mixin',
      1 => 'activity-contact-days-since-last-contact-hidden-mixin',
    ),
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
      'export' => true,
      'entity_pagination' => true,
    ),
    'acl_resource' => 'oro_sales_opportunity_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'o.id',
          1 => 'o.name',
          2 => 'o.createdAt',
          3 => 'o.updatedAt',
          4 => 'o.closeDate',
          5 => 'o.probability',
          6 => 'o.budgetAmountValue as budgetAmount',
          7 => 'o.closeRevenueValue  as closeRevenue',
          8 => 'o.budgetAmountCurrency as budgetAmountCurrency',
          9 => 'o.closeRevenueCurrency as closeRevenueCurrency',
          10 => 'IDENTITY(o.status) as status',
          11 => 'CONCAT_WS(\' \', contactAlias.firstName, contactAlias.lastName) as contactName',
          12 => 'contactAlias.id as contact',
          13 => 'closeReason.label as closeReasonLabel',
          14 => 'email.email as primaryEmail',
          15 => 'own.id as owner',
          16 => 'CONCAT_WS(\' \', own.firstName, own.lastName) as ownerName',
          17 => 'account.name as accountName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'alias' => 'o',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'o.contact',
              'alias' => 'contactAlias',
            ),
            1 => 
            array (
              'join' => 'o.closeReason',
              'alias' => 'closeReason',
            ),
            2 => 
            array (
              'join' => 'contactAlias.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
            3 => 
            array (
              'join' => 'o.owner',
              'alias' => 'own',
            ),
            4 => 
            array (
              'join' => 'o.customerAssociation',
              'alias' => 'customer',
            ),
            5 => 
            array (
              'join' => 'customer.account',
              'alias' => 'account',
            ),
          ),
        ),
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
        'label' => 'oro.sales.opportunity.id.label',
        'renderable' => false,
      ),
      'name' => 
      array (
        'label' => 'oro.sales.opportunity.name.label',
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
      'contactName' => 
      array (
        'label' => 'oro.sales.opportunity.contact.label',
        'frontend_type' => 'relation',
        'inline_editing' => 
        array (
          'enable' => true,
          'editor' => 
          array (
            'view_options' => 
            array (
              'value_field_name' => 'contact',
            ),
          ),
          'autocomplete_api_accessor' => 
          array (
            'search_handler_name' => 'contacts',
            'label_field_name' => 'fullName',
          ),
        ),
      ),
      'closeRevenue' => 
      array (
        'label' => 'oro.sales.opportunity.close_revenue.label',
        'frontend_type' => 'multi-currency',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_currency.converter.currency_to_string',
          1 => 'convert',
        ),
        'multicurrency_config' => 
        array (
          'original_field' => 'closeRevenue',
          'value_field' => 'closeRevenueValue',
          'currency_field' => 'closeRevenueCurrency',
        ),
        'renderable' => false,
        'inline_editing' => 
        array (
          'enable' => true,
        ),
      ),
      'closeReasonLabel' => 
      array (
        'label' => 'oro.sales.opportunity.close_reason.label',
        'renderable' => false,
      ),
      'closeDate' => 
      array (
        'label' => 'oro.sales.opportunity.close_date.label',
        'frontend_type' => 'date',
      ),
      'budgetAmount' => 
      array (
        'label' => 'oro.sales.opportunity.budget_amount.label',
        'frontend_type' => 'multi-currency',
        'type' => 'callback',
        'callable' => 
        array (
          0 => '@oro_currency.converter.currency_to_string',
          1 => 'convert',
        ),
        'multicurrency_config' => 
        array (
          'original_field' => 'budgetAmount',
          'value_field' => 'budgetAmountValue',
          'currency_field' => 'budgetAmountCurrency',
        ),
        'inline_editing' => 
        array (
          'enable' => true,
        ),
      ),
      'probability' => 
      array (
        'label' => 'oro.sales.opportunity.probability.label',
        'frontend_type' => 'percent',
      ),
      'status' => 
      array (
        'context' => 
        array (
          'enum_code' => 'opportunity_status',
        ),
        'frontend_type' => 'enum',
        'label' => 'oro.sales.opportunity.status.label',
      ),
      'primaryEmail' => 
      array (
        'label' => 'oro.contact.email.label',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.sales.opportunity.owner.label',
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
            'permission_check_entity_name' => 'Oro_Bundle_SalesBundle_Entity_Opportunity',
          ),
        ),
      ),
      'accountName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.datagrid.columns.account_name.label',
        'renderable' => false,
      ),
    ),
    'fields_acl' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'o.name',
        ),
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'o.updatedAt',
        ),
        'contactName' => 
        array (
          'data_name' => 'o.contact',
        ),
        'closeRevenue' => 
        array (
          'data_name' => 'o.closeRevenue',
        ),
        'closeRevenueCurrency' => 
        array (
          'data_name' => 'o.closeRevenueCurrency',
        ),
        'closeReasonLabel' => 
        array (
          'data_name' => 'o.closeReason',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'o.budgetAmountValue',
        ),
        'budgetAmountCurrency' => 
        array (
          'data_name' => 'o.budgetAmountCurrency',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'status' => 
        array (
          'data_name' => 'o.status',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'o.contact',
        ),
        'ownerName' => 
        array (
          'data_name' => 'o.owner',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
      'owner' => NULL,
      'contact' => NULL,
      'view_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_opportunity_view',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'update_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_sales_opportunity_update',
        'params' => 
        array (
          0 => 'id',
        ),
      ),
      'delete_link' => 
      array (
        'type' => 'url',
        'route' => 'oro_api_delete_opportunity',
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
          'data_name' => 'o.id',
        ),
        'name' => 
        array (
          'data_name' => 'o.name',
        ),
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
        ),
        'updatedAt' => 
        array (
          'data_name' => 'o.updatedAt',
        ),
        'contactName' => 
        array (
          'data_name' => 'contactName',
        ),
        'closeRevenue' => 
        array (
          'data_name' => 'closeRevenue',
        ),
        'closeReasonLabel' => 
        array (
          'data_name' => 'closeReason.label',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'budgetAmount',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'email.email',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
      ),
      'default' => 
      array (
        'createdAt' => 'DESC',
      ),
      'toolbar_sorting' => true,
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'o.name',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'o.createdAt',
        ),
        'updatedAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'o.updatedAt',
          'renderable' => false,
        ),
        'contactName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactName',
          'renderable' => false,
        ),
        'closeRevenue' => 
        array (
          'type' => 'currency',
          'data_name' => 'closeRevenue',
          'renderable' => false,
        ),
        'closeRevenueCurrency' => 
        array (
          'type' => 'choice',
          'data_name' => 'closeRevenueCurrency',
          'label' => 'oro.sales.opportunity.close_revenue_currency.label',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_currency.helper.currency_name->getCurrencyChoices(\'full_name\')',
              'multiple' => true,
            ),
          ),
          'renderable' => false,
        ),
        'closeReasonLabel' => 
        array (
          'type' => 'entity',
          'data_name' => 'closeReason.name',
          'renderable' => false,
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\SalesBundle\\Entity\\OpportunityCloseReason',
              'choice_label' => 'label',
              'translatable_options' => false,
            ),
          ),
        ),
        'closeDate' => 
        array (
          'type' => 'date',
          'data_name' => 'o.closeDate',
        ),
        'budgetAmount' => 
        array (
          'type' => 'currency',
          'data_name' => 'budgetAmount',
        ),
        'budgetAmountCurrency' => 
        array (
          'type' => 'choice',
          'data_name' => 'budgetAmountCurrency',
          'label' => 'oro.sales.opportunity.budget_amount_currency.label',
          'options' => 
          array (
            'field_options' => 
            array (
              'choices' => '@oro_currency.helper.currency_name->getCurrencyChoices(\'full_name\')',
              'multiple' => true,
            ),
          ),
        ),
        'probability' => 
        array (
          'type' => 'percent',
          'data_name' => 'o.probability',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'data_name' => 'status',
          'enum_code' => 'opportunity_status',
        ),
        'primaryEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
        'owner' => 
        array (
          'type' => 'choice-tree',
          'label' => 'oro.user.owner.label',
          'data_name' => 'o.owner',
          'autocomplete_alias' => 'assigned_to_organization_users',
          'renderedPropertyName' => 'fullName',
          'className' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
        ),
        'businessUnitId' => 
        array (
          'label' => 'oro.business_unit.label',
          'type' => 'choice-business-unit',
          'data_name' => 'o.owner',
          'className' => 'Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit',
        ),
      ),
    ),
    'actions' => 
    array (
      'view' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_opportunity_view',
        'label' => 'oro.grid.action.view',
        'icon' => 'eye',
        'link' => 'view_link',
        'rowAction' => true,
      ),
      'update' => 
      array (
        'type' => 'navigate',
        'acl_resource' => 'oro_sales_opportunity_update',
        'label' => 'oro.grid.action.update',
        'icon' => 'edit',
        'link' => 'update_link',
      ),
      'delete' => 
      array (
        'type' => 'delete',
        'acl_resource' => 'oro_sales_opportunity_delete',
        'label' => 'oro.grid.action.delete',
        'icon' => 'trash',
        'link' => 'delete_link',
      ),
    ),
    'views_list' => '@oro_sales.opportunity.datagrid_view_list',
    'appearances' => 
    array (
      'board' => 
      array (
        'opportunity-by-status' => 
        array (
          'label' => 'Board',
          'group_by' => 
          array (
            'property' => 'status',
            'order_by' => 
            array (
              'priority' => 'ASC',
            ),
          ),
          'card_view' => 'orosales/js/app/views/board/opportunity-card-view',
          'default_transition' => 
          array (
            'class' => 'orodatagrid/js/app/transitions/update-main-property-transition',
          ),
          'acl_resource' => 'oro_sales_opportunity_update',
        ),
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