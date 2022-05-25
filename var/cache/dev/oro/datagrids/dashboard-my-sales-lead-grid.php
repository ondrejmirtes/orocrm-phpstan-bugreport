<?php return array (
  'dashboard-my-sales-lead-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Lead',
    'mixins' => 
    array (
      0 => 'activity-contact-last-contacted-date-data-mixin',
    ),
    'acl_resource' => 'oro_sales_opportunity_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'l.id',
          1 => 'l.name',
          2 => 's.id as status',
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
              'join' => 'l.status',
              'alias' => 's',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'name' => 
      array (
        'label' => 'oro.sales.lead.name.label',
        'frontend_type' => 'html',
        'type' => 'link',
        'route' => 'oro_sales_lead_view',
        'params' => 
        array (
          'id' => 'id',
        ),
      ),
      'status' => 
      array (
        'frontend_type' => 'select',
        'label' => 'oro.sales.lead.status.label',
        'choices' => '@oro_entity_extend.enum_value_provider->getEnumChoicesByCode(\'lead_status\')',
      ),
    ),
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
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
  'activity-contact-last-contacted-date-data-mixin' => 
  array (
    'source' => 
    array (
      'query' => 
      array (
        'select' => 
        array (
          0 => '__root_entity__.ac_last_contact_date as lastContactedDate',
        ),
      ),
    ),
    'columns' => 
    array (
      'lastContactedDate' => 
      array (
        'label' => 'oro.activity_contact.ac_last_contact_date.label',
        'frontend_type' => 'datetime',
      ),
    ),
  ),
);