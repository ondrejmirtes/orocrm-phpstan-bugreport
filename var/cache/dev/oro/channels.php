<?php return array (
  'entity_data' => 
  array (
    'Oro\\Bundle\\ChannelBundle\\Entity\\CustomerIdentity' => 
    array (
      'name' => 'Oro\\Bundle\\ChannelBundle\\Entity\\CustomerIdentity',
      'dependent' => 
      array (
      ),
      'navigation_items' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'dependencies_condition' => 'AND',
    ),
    'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel' => 
    array (
      'name' => 'Oro\\Bundle\\SalesBundle\\Entity\\SalesFunnel',
      'navigation_items' => 
      array (
        0 => 'application_menu.sales_tab.sales_salesfunnel_list',
      ),
      'dependent' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'dependencies_condition' => 'AND',
    ),
    'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer' => 
    array (
      'name' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
      'navigation_items' => 
      array (
        0 => 'application_menu.customers_tab.b2bcustomer_list',
      ),
      'dependent' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'dependencies_condition' => 'AND',
    ),
  ),
  'channel_types' => 
  array (
    'custom' => 
    array (
      'label' => 'oro.channel.channel_type.custom.label',
      'entities' => 
      array (
      ),
      'customer_identity' => 'Oro\\Bundle\\ChannelBundle\\Entity\\CustomerIdentity',
      'system' => false,
      'priority' => 0,
    ),
    'b2b' => 
    array (
      'label' => 'oro.sales.channel_type.b2b.label',
      'customer_identity' => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
      'lifetime_value' => 'lifetime',
      'system' => false,
      'priority' => -20,
      'entities' => 
      array (
      ),
    ),
  ),
  'dependent_map' => 
  array (
  ),
  'customer_entities' => 
  array (
    0 => 'Oro\\Bundle\\ChannelBundle\\Entity\\CustomerIdentity',
    1 => 'Oro\\Bundle\\SalesBundle\\Entity\\B2bCustomer',
  ),
);