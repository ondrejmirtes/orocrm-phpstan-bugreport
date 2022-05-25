<?php return array (
  'sales-funnel-opportunity-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
    'options' => 
    array (
      'entityHint' => 'oro.sales.opportunity.entity_plural_label',
    ),
    'acl_resource' => 'oro_sales_opportunity_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'opportunity.id',
          1 => 'opportunity.name',
          2 => 'opportunity.probability',
          3 => 'CONCAT_WS(\' \', contact.firstName, contact.lastName) as contactName',
          4 => 'email.email as primaryEmail',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\Opportunity',
            'alias' => 'opportunity',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'opportunity.contact',
              'alias' => 'contact',
            ),
            1 => 
            array (
              'join' => 'contact.emails',
              'alias' => 'email',
              'conditionType' => 'WITH',
              'condition' => 'email.primary = true',
            ),
          ),
        ),
        'where' => 
        array (
          'and' => 
          array (
            0 => 'opportunity.status NOT IN(\'won\', \'lost\')',
          ),
        ),
      ),
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
      'contactName' => 
      array (
        'label' => 'oro.sales.opportunity.contact.label',
      ),
      'probability' => 
      array (
        'label' => 'oro.sales.opportunity.probability.label',
        'frontend_type' => 'percent',
      ),
      'primaryEmail' => 
      array (
        'label' => 'oro.contact.email.label',
      ),
    ),
    'fields_acl' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'opportunity.name',
        ),
        'contactName' => 
        array (
          'data_name' => 'opportunity.contact',
        ),
        'probability' => 
        array (
          'data_name' => 'opportunity.probability',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'opportunity.contact',
        ),
      ),
    ),
    'properties' => 
    array (
      'id' => NULL,
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'name' => 
        array (
          'data_name' => 'opportunity.name',
        ),
        'contactName' => 
        array (
          'data_name' => 'contactName',
        ),
        'probability' => 
        array (
          'data_name' => 'opportunity.probability',
        ),
        'primaryEmail' => 
        array (
          'data_name' => 'email.email',
        ),
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'id' => 
        array (
          'type' => 'number-range',
          'data_name' => 'opportunity.id',
          'renderable' => false,
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'opportunity.name',
        ),
        'contactName' => 
        array (
          'type' => 'string',
          'data_name' => 'contactName',
        ),
        'probability' => 
        array (
          'type' => 'percent',
          'data_name' => 'opportunity.probability',
        ),
        'primaryEmail' => 
        array (
          'type' => 'string',
          'data_name' => 'email.email',
        ),
      ),
    ),
  ),
);