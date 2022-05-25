<?php return array (
  'oro-sales-b2bcustomers-for-context-grid' => 
  array (
    'extended_entity_name' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
    'acl_resource' => 'oro_sales_b2bcustomer_view',
    'source' => 
    array (
      'type' => 'orm',
      'query' => 
      array (
        'select' => 
        array (
          0 => 'c.id',
          1 => 'c.name',
          2 => 'CASE WHEN c.lifetime IS NOT NULL THEN c.lifetime ELSE 0 END as lifetime',
          3 => 'channel.name as channelName',
        ),
        'from' => 
        array (
          0 => 
          array (
            'table' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
            'alias' => 'c',
          ),
        ),
        'join' => 
        array (
          'left' => 
          array (
            0 => 
            array (
              'join' => 'c.dataChannel',
              'alias' => 'channel',
            ),
          ),
        ),
      ),
    ),
    'columns' => 
    array (
      'id' => 
      array (
        'label' => 'oro.sales.b2bcustomer.id.label',
      ),
      'channelName' => 
      array (
        'label' => 'oro.sales.b2bcustomer.data_channel.label',
      ),
      'name' => 
      array (
        'label' => 'oro.sales.b2bcustomer.name.label',
      ),
      'lifetime' => 
      array (
        'label' => 'oro.sales.b2bcustomer.lifetime.label',
        'frontend_type' => 'currency',
      ),
    ),
    'sorters' => 
    array (
      'columns' => 
      array (
        'channelName' => 
        array (
          'data_name' => 'channelName',
        ),
        'name' => 
        array (
          'data_name' => 'c.name',
        ),
        'lifetime' => 
        array (
          'data_name' => 'c.lifetime',
        ),
      ),
      'default' => 
      array (
        'name' => 'ASC',
      ),
    ),
    'filters' => 
    array (
      'columns' => 
      array (
        'channelName' => 
        array (
          'type' => 'entity',
          'data_name' => 'channel.id',
          'options' => 
          array (
            'field_options' => 
            array (
              'class' => 'Oro\\Bundle\\ChannelBundle\\Entity\\Channel',
              'choice_label' => 'name',
              'translatable_options' => false,
            ),
          ),
        ),
        'name' => 
        array (
          'type' => 'string',
          'data_name' => 'c.name',
        ),
        'lifetime' => 
        array (
          'type' => 'number-range',
          'data_name' => 'c.lifetime',
        ),
      ),
    ),
    'options' => 
    array (
      'entity_pagination' => true,
      'toolbarOptions' => 
      array (
        'pageSize' => 
        array (
          'default_per_page' => 10,
        ),
      ),
      'routerEnabled' => false,
    ),
  ),
);