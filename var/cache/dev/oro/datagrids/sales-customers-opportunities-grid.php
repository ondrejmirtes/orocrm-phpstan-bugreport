<?php return array (
  'sales-customers-opportunities-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
    'acl_resource' => 'oro_sales_opportunity_view',
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
      'entity_pagination' => true,
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
    ),
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'o.id',
          1 => 'o.name',
          2 => 'o.budgetAmountValue as budgetAmount',
          3 => 'o.budgetAmountCurrency as budgetAmountCurrency',
          4 => 'o.probability',
          5 => 's.id as status',
          6 => 'o.closeDate',
          7 => 'o.createdAt',
          8 => 'CONCAT_WS(\' \', owner.firstName, owner.lastName) as ownerName',
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
              'join' => 'o.status',
              'alias' => 's',
            ),
            1 => 
            array (
              'join' => 'o.owner',
              'alias' => 'owner',
            ),
          ),
        ),
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
        'budgetAmount' => 
        array (
          'data_name' => 'o.budgetAmountValue',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'statusLabel' => 
        array (
          'data_name' => 'o.status',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
        ),
        'ownerName' => 
        array (
          'data_name' => 'o.owner',
        ),
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'o.name',
        ),
        'budgetAmount' => 
        array (
          'data_name' => 'o.budgetAmountValue',
        ),
        'probability' => 
        array (
          'data_name' => 'o.probability',
        ),
        'status' => 
        array (
          'data_name' => 'status',
        ),
        'closeDate' => 
        array (
          'data_name' => 'o.closeDate',
        ),
        'createdAt' => 
        array (
          'data_name' => 'o.createdAt',
        ),
        'ownerName' => 
        array (
          'data_name' => 'ownerName',
        ),
      ),
      'default' => 
      array (
        'closeDate' => 'DESC',
      ),
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
        'closeDate' => 
        array (
          'type' => 'date',
          'data_name' => 'o.closeDate',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'data_name' => 'o.createdAt',
        ),
        'owner' => 
        array (
          'type' => 'entity',
          'label' => 'oro.user.owner.label',
          'data_name' => 'o.owner',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\UserBundle\\Entity\\User',
              'multiple' => true,
              'choice_label' => 'fullName',
              'translatable_options' => false,
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.sales.opportunity.name.label',
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
        'frontend_type' => 'select',
        'label' => 'oro.sales.opportunity.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'opportunity_status\')',
      ),
      'closeDate' => 
      array (
        'label' => 'oro.sales.opportunity.close_date.label',
        'frontend_type' => 'date',
      ),
      'createdAt' => 
      array (
        'label' => 'oro.ui.created_at',
        'frontend_type' => 'datetime',
      ),
      'ownerName' => 
      array (
        'label' => 'oro.sales.opportunity.owner.label',
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
    'properties' => 
    array (
      'id' => NULL,
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
  ),
);